<?php

namespace App\Http\Livewire\admin;

use App\Models\Company;
use App\Models\BusRoute;
use App\Models\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class BusRoutesTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    public string $primaryKey = 'id';

    public string $sortField = 'id';

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
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\BusRoute>
     */
    public function datasource(): array
    {
        return BusRoute::query()->join('schedules', 'schedules.id', 'routes.schedule_id')->select([
            'routes.*',
            'schedules.title as schedule_title',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY routes.id) AS rn'),
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
        return [
            'schedule' => [ // relationship on dishes model
                'title', // column enabled to search
                'depart_time'
            ],
        ];
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
            ->addColumn('from_destination')

            /** Example of custom column using a closure **/
            ->addColumn('from_destination_lower', fn ($model) => strtolower(e($model->from_destination)))

            ->addColumn('to_destination')
            ->addColumn('price')
            ->addColumn('schedule_id')
            ->addColumn('price_formatted', function ($model) {

                //    dd($model->price);
                return Company::find(1)->company_local_currency  . number_format($model->price, 2);
            })
            ->addColumn('schedule_formatted', function ($model) {
                $schedule = Schedule::find($model->schedule_id);

                return $schedule->title . ' (' .     Carbon::parse($schedule->depart_time)->format('H:i A') . ')';
            })
            ->addColumn('discount_amount')
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
            Column::make('Id', 'rn')->sortable()
                ->searchable(),
            Column::make('DEPART FROM', 'from_destination')
                ->sortable()
                ->searchable(),

            Column::make('DEPART TO', 'to_destination')
                ->sortable()
                ->searchable(),

            Column::make('Price', 'price_formatted', 'price')
                ->sortable()
                ->searchable(),

            Column::make('Schedule', 'schedule_formatted', 'schedule_title')
                ->sortable()
                ->searchable(),


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
            Filter::inputText('from_destination')->operators(['contains']),
            Filter::inputText('to_destination')->operators(['contains']),

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
                ->emitTo('admin.add-routes', 'edit', [
                    'key' => 'id'
                ]),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger')
                ->emitTo('admin.delete-routes', 'delete', [
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

    /**
     * PowerGrid BusRoute Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('bus-route.edit', function(\App\Models\BusRoute $model) {
                    return $model->id;
               }),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('bus-route.destroy', function(\App\Models\BusRoute $model) {
                    return $model->id;
               })
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
     * PowerGrid BusRoute Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($bus-route) => $bus-route->id === 1)
                ->hide(),
        ];
    }
    */
}
