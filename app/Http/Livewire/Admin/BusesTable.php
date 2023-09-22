<?php

namespace App\Http\Livewire\admin;

use App\Models\Bus;
use Illuminate\Support\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class BusesTable extends PowerGridComponent
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
    public function datasource(): array
    {
        return DB::table('buses')
            ->leftJoin('routes', 'routes.id', 'buses.route_id')
            ->leftJoin('schedules', 'schedules.id', 'buses.schedule_id')->select([
                'buses.*',
                'routes.from_destination as depart_from',
                'routes.to_destination as depart_to',
                'schedules.title as schedule_title',
                'schedules.check_in_time as schedule_check_in_time',
                'schedules.depart_time as schedule_depart_time',
                // DB::Raw('ROW_NUMBER() OVER (ORDER BY buses.id) AS rn'),
            ])->get()->toArray();
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
            ->addColumn('model')

            /** Example of custom column using a closure **/
            ->addColumn('model_lower', fn ($model) => strtolower(e($model->model)))

            ->addColumn('brand')
            ->addColumn('serial_number')
            ->addColumn('seats')
            ->addColumn('condition')
            ->addColumn('date_departing')
            ->addColumn('route_id')
            ->addColumn('depart_from')
            ->addColumn('depart_to')
            ->addColumn('created_at')
            ->addColumn('updated_at')
            ->addColumn('schedule_id')
            ->addColumn('schedule_title')
            ->addColumn('schedule_check_in_time')
            ->addColumn('schedule_depart_time')
            ->addColumn('is_full')
            ->addColumn('is_full_formatted', fn ($model) => $model->is_full == true ? '<span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">YES</span><span class="ms-1 fa-solid fa-check" ></span></span>' : '')
            ->addColumn('date_departing_formatted', fn ($model) => $model->date_departing != '' ?  Carbon::parse($model->date_departing)->format('d/m/Y') : '')
            ->addColumn('time_departing_formatted', fn ($model) => $model->date_departing != '' ? Carbon::parse($model->schedule_depart_time)->format('H:i:s') : '')
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
            Column::make('Model', 'model')
                ->sortable()
                ->searchable(),

            Column::make('Brand', 'brand')
                ->sortable()
                ->searchable(),

            Column::make('Serial number', 'serial_number')
                ->sortable()
                ->searchable(),

            Column::make('Seats', 'seats')->sortable()->searchable(),
            Column::make('Condition', 'condition')
                ->sortable()
                ->searchable(),

            Column::make('DEPART FROM', 'depart_from')
                ->sortable()
                ->searchable(),
            Column::make('DEPART TO', 'depart_to')
                ->sortable()
                ->searchable(),
            Column::make('Is full', 'is_full_formatted', 'is_full')
                ->sortable(),

            Column::make('Date departing', 'date_departing_formatted', 'date_departing')
                ->sortable(),

            Column::make('TIME departing', 'time_departing_formatted', 'schedule_depart_time')
                ->sortable(),
            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::make('Updated at', 'updated_at_formatted', 'updated_at')
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
            Filter::inputText('model')->operators(['contains']),
            Filter::inputText('brand')->operators(['contains']),
            Filter::inputText('serial_number')->operators(['contains']),

            Filter::boolean('is_full'),
            Filter::select('condition', 'condition')->dataSource(Bus::select('condition')->distinct()->get())
                ->optionValue('condition')
                ->optionLabel('condition'),

        ];
    }




    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'refresh'   => '$refresh',

            ]
        );
    }
    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class('btn btn-secondary')
                ->emitTo('admin.add-bus', 'edit', [
                    'key' => 'id'
                ]),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger')
                ->emitTo('admin.delete-bus', 'delete', [
                    'key' => 'id'
                ]),


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
