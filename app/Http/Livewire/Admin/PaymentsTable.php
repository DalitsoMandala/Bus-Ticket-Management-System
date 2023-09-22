<?php

namespace App\Http\Livewire\admin;

use App\Models\Payment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class PaymentsTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        $name = $this->getName();
        $withoutLocation = str_replace(['admin.', 'customer.'], '', $name);
        return [
            Exportable::make($withoutLocation . Carbon::now()->format('_Y-m-d_H_i'))
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Eloquent, Query Builder or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     *
     */
    public function datasource(): array
    {
        $data = Payment::query()->select([
            'payments.*',
            //  DB::Raw('ROW_NUMBER() OVER (ORDER BY payments.id) AS rn'),
        ])->get();


        $dataArray = [];
        foreach ($data as $payment_data) {
            $paymentData = $payment_data->toArray();

            $paymentData['payment_date'] = Carbon::parse($paymentData['customer_data']['payment_date'])->format('d/m/Y');
            $paymentData['journey_date'] = $paymentData['customer_data']['journey_date'];
            $paymentData['journey_time'] = $paymentData['customer_data']['journey_time'];
            $paymentData['route_from'] = $paymentData['customer_data']['route_from'];
            $paymentData['route_to'] = $paymentData['customer_data']['route_to'];
            $paymentData['seat_no'] = $paymentData['customer_data']['seat_no'];
            $paymentData['journey_date'] = $paymentData['customer_data']['journey_date'];
            $paymentData['customer_name'] = $paymentData['customer_data']['customer_name'];
            $paymentData['payment_status'] = $paymentData['payment_status'] == 1 ? 'successful' : 'failed';
            $dataArray[] = $paymentData;
        }


        return $dataArray;
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('rn')
            ->addColumn('transaction_id')
            ->addColumn('amount_paid')
            ->addColumn('currency')
            ->addColumn('local_currency')
            ->addColumn('amt_paid', function ($model) {
                //    dd($model->local_currency);
                $data = $model->amount_paid;

                return $model->currency . ' ' . $data;
            })
            ->addColumn('tax_amount')
            ->addColumn('tax', function ($model) {
                $data = $model->tax_amount;
                return $model->currency . ' ' . $data;
            })

            ->addColumn('payment_status')
            ->addColumn('status', function ($model) {
                $data = $model->payment_status;

                if ($data == 'successful') {
                    return '<span class="badge badge-phoenix fs--1 badge-phoenix-success">successful</span>';
                } else {
                    return '<span class="badge badge-phoenix fs--1 badge-phoenix-danger">failed</span>';
                }
            })

            ->addColumn('customer_name')
            ->addColumn('journey_date')
            ->addColumn('jrn_date', function ($model) {
                // $data = json_decode($model->customer_data);
                return Carbon::parse($model->journey_date)->format('d/m/Y');
            })
            ->addColumn('journey_time')

            ->addColumn('jrn_time', function ($model) {

                return $model->journey_time;
            })


            ->addColumn('payment_date')



            ->addColumn('route_from')

            ->addColumn('route_to')

            ->addColumn('seat_no')
            ->addColumn('payment_method')

            ->addColumn('rt_from', function ($model) {
                return $model->route_from;
            })

            ->addColumn('rt_to', function ($model) {
                return $model->route_to;
            })

            ->addColumn('st_no', function ($model) {
                return $model->seat_no;
            })

            //  ->addColumn('payment_date_formatted', fn ($model) => Carbon::parse($model->payment_date)->format('d/m/Y H:i:s'))

            ->addColumn('trans_method', function ($model) {
                $method =  $model->payment_method;


                switch ($method) {
                    case 'airtel':
                        # code...

                        return '<i class="fa-solid fa-signal text-danger"></i> <span class="text-uppercase fw-bold">' . $method . '</span>';
                        break;

                    case 'mpamba':
                        # code...

                        return
                            '<i class="fa-solid fa-signal text-success"></i> <span class="text-uppercase fw-bold">' . $method . '</span>';
                        break;
                    default:
                        # code...
                        return '<span class="badge fs--1 bg-secondary text-uppercase"> <i class="fa-solid fa-credit-card"></i> ' . $method . '</span>';
                        break;
                }
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [


            Column::make('ID', 'id', 'id')
                ->sortable()
                ->searchable(),

            Column::make('TRANSACTION ID', 'transaction_id', 'transaction_id')
                ->sortable()
                ->searchable(),

            Column::make('CUSTOMER NAME', 'customer_name', 'customer_name')
                ->searchable(),
            Column::make('PAID AMOUNT', 'amt_paid', 'amount_paid')
                ->searchable(),

            Column::make('TAX AMOUNT', 'tax', 'tax_amount')
                ->searchable(),
            Column::make('PAYMENT STATUS', 'status', 'payment_status')
                ->sortable()->searchable(),


            Column::make('TRANSACTION METHOD', 'trans_method', 'payment_method')
                ->sortable()->searchable(),

            Column::make('JOURNEY DATE', 'jrn_date', 'journey_date')
                ->searchable(),



            Column::make('JOURNEY TIME', 'jrn_time', 'journey_time')
                ->searchable(),



            Column::make('DEPART FROM', 'rt_from', 'route_from')
                ->searchable(),



            Column::make('DEPART FOR', 'rt_to', 'route_to')
                ->searchable(),



            Column::make('SEAT #', 'st_no', 'seat_no')
                ->searchable(),

            Column::make('PAYMENT DATE', 'payment_date')
                ->sortable()
                ->searchable(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
