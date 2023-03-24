<?php

namespace App\Http\Livewire\admin;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SeatsTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Seat>
     */
    public function datasource(): Builder
    {
        return Seat::query()->select([
            'seats.*',
            DB::Raw('ROW_NUMBER() OVER (ORDER BY seats.id) AS rn'),
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
            'bus' => [
                'brand', 'model', 'serial_number'
            ]
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
            ->addColumn('rn')
            ->addColumn('model', function ($model) {
                $bus = Bus::find($model->bus_id);

                return $bus->model;
            })
            ->addColumn('brand', function ($model) {
                $bus = Seat::find($model->id)->bus->brand;

                return $bus;
            })
            ->addColumn('serial_number', function ($model) {
                $bus = Seat::find($model->id)->bus->serial_number;

                return $bus;
            })

            ->addColumn('is_taken', function ($model) {
                if ($model->is_taken == false) {
                    return '<span class="text-warning">Pending</span>';
                } else {
                    return '<span class="text-success"><i class="fa-solid fa-check"></i>Booked</span>';
                }
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
            Column::make('ID', 'id')
                ->hidden(),

            Column::make('ID', 'rn')
                ->sortable(),

            Column::make('SERIAL NUMBER', 'serial_number')
                ->searchable()
                ->sortable(),


            Column::make('MODEL', 'model')
                ->searchable()
                ->sortable(),

            Column::make('BRAND', 'brand')
                ->searchable()
                ->sortable(),


            Column::make('SEAT #', 'seat_no')
                ->searchable()
                ->sortable(),


            Column::make('STATUS', 'is_taken')
                ->searchable()
                ->sortable(),


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
            // Button::make('edit', 'Edit')
            //     ->class('btn btn-secondary')
            //     ->emitTo('admin.add-customer', 'edit', [
            //         'id' => 'id'
            //     ]),

            // Button::make('destroy', 'Delete')
            //     ->class('btn btn-danger')
            //     ->emitTo('admin.delete-customer', 'delete', [
            //         'id' => 'id'
            //     ]),


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
     * PowerGrid Seat Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('seat.edit', ['seat' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('seat.destroy', ['seat' => 'id'])
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
     * PowerGrid Seat Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($seat) => $seat->id === 1)
                ->hide(),
        ];
    }
    */
}
