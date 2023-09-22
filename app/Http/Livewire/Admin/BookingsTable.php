<?php

namespace App\Http\Livewire\admin;

use App\Models\Seat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class BookingsTable extends PowerGridComponent
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
                ->type(Exportable::TYPE_CSV),
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
     * @return Builder
     */
    public function datasource(): Builder
    {
        return DB::table('bookings')->leftJoin('customers', 'customers.id', 'bookings.customer_id')
            ->leftJoin('payments', 'bookings.payment_id', 'payments.id')
            ->leftJoin('buses', 'buses.id', 'bookings.bus_id')
            ->select([
                'bookings.*',
                'customers.first_name as customer_first_name',
                'customers.last_name as customer_last_name',
                'buses.model as bus_model',
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
    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('rn')
            ->addColumn('id')
            ->addColumn('payment_id')
            ->addColumn('customer_id')
            ->addColumn('customer_full_name', function ($model) {
                return $model->customer_first_name . ' ' . $model->customer_last_name;
            })
            ->addColumn('bus_model')
            ->addColumn('customer_first_name')
            ->addColumn('customer_last_name')

            ->addColumn('seat_id')
            ->addColumn('seat_no', function ($model) {
                return Seat::find($model->seat_id)->seat_no;
            })
            ->addColumn('date_departing_formatted', fn ($model) => Carbon::parse($model->date_departing)->format('d/m/Y'))
            ->addColumn('is_completed', fn ($model) => $model->is_completed == true ? '<span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">YES</span><span class="ms-1 fa-solid fa-check" ></span></span>' : '')
            ->addColumn('is_notified')
            ->addColumn('created_at_formatted', fn ($model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn ($model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('first name', 'customer_first_name', 'customers.first_name')
                ->sortable()
                ->searchableRaw('customers.first_name'),

            Column::make('last name', 'customer_last_name', 'customers.last_name')->sortable()
                ->searchableRaw('customers.last_name'),
            Column::make('Bus', 'bus_model')->sortable(),
            Column::make('Seat No.', 'seat_no'),
            Column::make('Date departing', 'date_departing_formatted', 'bookings.date_departing')
                ->sortable(),

            Column::make('Is completed', 'is_completed')
                ->sortable(),

            Column::make('Created at', 'created_at_formatted', 'bookings.created_at')
                ->sortable(),

            Column::make('Updated at', 'updated_at_formatted', 'bookings.updated_at')
                ->sortable(),

        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            Filter::datepicker('date_departing'),
            Filter::boolean('is_completed'),
            Filter::boolean('is_notified'),
            Filter::datetimepicker('created_at'),
            Filter::datetimepicker('updated_at'),
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
