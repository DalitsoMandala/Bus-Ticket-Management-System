<?php

namespace App\Http\Livewire\customer;

use App\Models\Payment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PaymentsTable extends PowerGridComponent
{
    use ActionButton;

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

        return [
            Exportable::make('export')
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
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Payment>
     */
    public function datasource(): array
    {
        // $data =
        //     Payment::query()->where('customer_id', auth()->user()->customers->first()->id)->select([
        //         'payments.*',
        //         'customer_data->journey_date as journdate',
        //         'customer_data->payment_date as paydate',
        //     'customer_data->journey_time as journtime',
        //     'customer_data->route_to as paydate',
        //         DB::Raw('ROW_NUMBER() OVER (ORDER BY payments.id) AS rn'),
        //     ])->get();

        $data = Payment::query()->where('customer_id', auth()->user()->customers->first()->id)->select([
            'payments.*',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY payments.id) AS rn'),
        ])->get();

        foreach ($data as $key => $paymentvalues) {
            # code...
            if ($paymentvalues['customer_data'] == null) {
                $paymentvalues['customer_data'] = [];
            }
            $getCustomerData = $paymentvalues['customer_data'];
            //['ticket_no'] = 'QEWCWEC';
            //loop this



            foreach ($getCustomerData as $key2 => $customer) {
                // ADD VALUES TO EXISTING ARRAY

                if ($key2 == 'payment_method') {
                    $key2 = 'payment_method_reference';
                }
                $data[$key]['' . $key2 . ''] = $customer;
            }

            if ($data[$key]['payment_status'] == 1) {
                $data[$key]['payment_status'] = 'successful';
            } else {
                $data[$key]['payment_status'] = 'failed';
            }
        }




        return $data->toArray();
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
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('rn')
            ->addColumn('transaction_id')
            ->addColumn('amount_paid')
            ->addColumn('amt_paid', function ($model) {

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
                    return '<span class="badge badge-phoenix  fs--1 badge-phoenix-success">successful</span>';
                } else {
                    return '<span class="badge badge-phoenix  fs--1 badge-phoenix-danger">failed</span>';
                }
            })

            ->addColumn('journey_date')
            ->addColumn('jrn_date', function ($model) {
                // $data = json_decode($model->customer_data);
                return Carbon::parse($model->customer_data['journey_date'])->format('d/m/Y');
            })
            ->addColumn('journey_time')

            ->addColumn('jrn_time', function ($model) {

                return $model->journey_time;
            })


            ->addColumn('payment_date')

            ->addColumn('pay_date', function ($model) {

                return Carbon::parse($model->payment_date)->format('d/m/Y');
            })

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
                        return '<span class="badge  fs--1 bg-secondary text-uppercase"> <i class="fa-solid fa-credit-card"></i> ' . $method . '</span>';
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


            Column::make('ID', 'id', 'rn')
                ->searchable(),

            Column::make('TRANSACTION METHOD', 'trans_method', 'payment_method')
                ->sortable()->searchable(),

            Column::make('PAID AMOUNT', 'amt_paid', 'amount_paid')
                ->searchable(),

            Column::make('TAX AMOUNT', 'tax', 'tax_amount')
                ->searchable(),
            Column::make('PAYMENT STATUS', 'status', 'payment_status')
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

            Column::make('PAYMENT DATE', 'pay_date', 'payment_date')
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

    /**
     * PowerGrid Payment Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('payment.edit', ['payment' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('payment.destroy', ['payment' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Payment Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($payment) => $payment->id === 1)
                ->hide(),
        ];
    }
    */
}
