<?php

namespace App\Http\Livewire\admin;

use App\Models\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SchedulesTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Schedule>
     */
    public function datasource(): Builder
    {
        return Schedule::query()->select([
            'schedules.*',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY schedules.id) AS rn'),
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
            ->addColumn('depart_time', function ($model) {
                $time = $model->depart_time;
                $time = Carbon::parse($time)->format('H:i A');

                return $time;
            })
            ->addColumn('check_in_time', function ($model) {

                $time = $model->check_in_time;
                $time = Carbon::parse($time)->format('H:i A');

                return $time;
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

            Column::make('TITLE', 'title')
                ->searchable()
                ->sortable(),

            Column::make('CHECK IN TIME', 'check_in_time')
                ->searchable()
                ->sortable(),

            Column::make('DEPART TIME', 'depart_time')
                ->searchable()
                ->sortable(),


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
     * PowerGrid Schedule Action Buttons.
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
                ->emitTo('admin.add-schedule', 'edit', [
                    'id' => 'id'
                ]),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger')
                ->emitTo('admin.delete-schedule', 'delete', [
                    'id' => 'id'
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
     * PowerGrid Schedule Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($schedule) => $schedule->id === 1)
                ->hide(),
        ];
    }
    */
}
