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
    public function datasource(): Builder
    {
        return Payment::query()->where('customer_id', auth()->user()->customers->first()->id)->select([
            'payments.*',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY payments.id) AS rn'),
        ]);
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
            ->addColumn('transaction_id', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->ticket_no;
            })

            ->addColumn('amount_paid', function ($model) {

                $data = $model->amount_paid;
                return $model->currency . ' ' . $data;
            })
            ->addColumn('tax_amount', function ($model) {
                $data = $model->tax_amount;
                return $model->currency . ' ' . $data;
            })
            ->addColumn('payment_status', function ($model) {
                $data = $model->payment_status;

                if ($data == 1) {
                    return '<span class="badge-phoenix  fs--1 badge-phoenix-success">success</span>';
                } else if ($data == 0) {
                    return '<span class="badge-phoenix  fs--1 badge-phoenix-danger">failed</span>';
                }
            })


            ->addColumn('journey_date', function ($model) {
                $data = json_decode($model->customer_data);
                return Carbon::parse($data->journey_date)->format('d/m/Y');
            })
            ->addColumn('journey_time', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->journey_time;
            })

            ->addColumn('payment_date', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->payment_date;
            })
            ->addColumn('route_from', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->route_from;
            })

            ->addColumn('route_to', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->route_to;
            })

            ->addColumn('seat_no', function ($model) {
                $data = json_decode($model->customer_data);
                return $data->seat_no;
            })
            ->addColumn('transaction_method', function ($model) {
                $method =  $model->payment_method;

                if ($method == 'paypal') {
                }
                switch ($method) {
                    case 'airtel':
                        # code...

                        return '<i class="fa-solid fa-signal text-danger"></i> ' . $method;
                        break;

                    case 'mpamba':
                        # code...

                        return '<i class="fa-solid fa-signal text-success"></i> ' . $method;
                        break;
                    default:
                        # code...
                        return '<span class="badge  fs--1 bg-secondary"> <i class="fa-solid fa-credit-card"></i> ' . $method . '</span>';
                        break;
                }
            })


            ->addColumn('updated_at_formatted', fn (Payment $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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
            Column::make('ID', 'id')
                ->searchable(),

            Column::make('TRANSACTION METHOD', 'transaction_method', 'payment_method')
                ->searchable(),

            Column::make('PAID AMOUNT', 'amount_paid')
                ->searchable(),

            Column::make('TAX AMOUNT', 'tax_amount'),
            Column::make('PAYMENT STATUS', 'payment_status'),

            Column::make('JOURNEY DATE', 'journey_date')
                ->searchable(),



            Column::make('JOURNEY TIME', 'journey_time')
                ->searchable(),



            Column::make('DEPART FROM', 'route_from')
                ->searchable(),



            Column::make('DEPART FOR', 'route_to')
                ->searchable(),



            Column::make('SEAT #', 'seat_no')
                ->searchable(),

            Column::make('PAYMENT DATE', 'payment_date'),

            // Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker(),


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
