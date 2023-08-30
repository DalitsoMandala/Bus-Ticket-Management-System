<?php

namespace App\Http\Livewire\admin;

use App\Models\Company;
use App\Models\BusRoute;
use App\Models\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class BusRoutesTable extends PowerGridComponent
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
     * @return Builder<\App\Models\BusRoute>
     */
    public function datasource(): Builder
    {
        return BusRoute::query()->select([
            'routes.*',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY routes.id) AS rn'),
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
        return [
            'schedule' => [ // relationship on dishes model
                'title', // column enabled to search
                'depart_time'
            ],
            //...
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
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('from_destination')
            ->addColumn('to_destination')
            ->addColumn('price', function ($model) {

                //    dd($model->price);
                return Company::find(1)->company_local_currency  . number_format($model->price, 2);
            })
            ->addColumn('schedule', function ($model) {
                $schedule = Schedule::find($model->schedule_id);

                return $schedule->title . ' (' .     Carbon::parse($schedule->depart_time)->format('H:i A') . ')';
            })
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
            Column::make('ID', 'rn')
                ->sortable(),

            Column::make('ID', 'id')
                ->hidden(),

            Column::make('DEPART FROM', 'from_destination')
                ->sortable()
                ->searchable(),

            Column::make('DEPART FOR', 'to_destination')
                ->sortable()
                ->searchable(),


            Column::make('SCHEDULE', 'schedule')
                ->sortable()
                ->searchable(),

            Column::make('PRICE', 'price')
                ->sortable()
                ->searchable(),

            // Column::make('CREATED AT', 'created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker(),

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
     * PowerGrid BusRoute Action Buttons.
     *
     * @return array<int, Button>
     */


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
