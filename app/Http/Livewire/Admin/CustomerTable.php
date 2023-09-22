<?php

namespace App\Http\Livewire\admin;

use App\Models\Customer;
use Illuminate\Support\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class CustomerTable extends PowerGridComponent
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
        return DB::table('customers')->select([
            'customers.*',
            //        DB::Raw('ROW_NUMBER() OVER (ORDER BY customers.id) AS rn'),
        ]);
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
                ->emitTo('admin.add-customer', 'edit', [
                    'key' => 'id'
                ]),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger')
                ->emitTo('admin.delete-customer', 'delete', [
                    'key' => 'id'
                ]),


        ];
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
            ->addColumn('user_id')
            ->addColumn('first_name')

            /** Example of custom column using a closure **/
            ->addColumn('first_name_lower', fn ($model) => strtolower(e($model->first_name)))

            ->addColumn('last_name')
            ->addColumn('phone_number')
            ->addColumn('gender')
            ->addColumn('home_address')
            ->addColumn('birth_date')
            ->addColumn('birth_date_formatted', fn ($model) => $model->birth_date != '' ? Carbon::parse($model->birth_date)->format('d/m/Y H:i:s') : '')
            ->addColumn('facebook_link')
            ->addColumn('instagram_link')
            ->addColumn('twitter_link')
            ->addColumn('profile_picture')
            ->addColumn('customer_uuid')
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
            Column::make('First name', 'first_name')
                ->sortable()
                ->searchable(),

            Column::make('Last name', 'last_name')
                ->sortable()
                ->searchable(),

            Column::make('Phone number', 'phone_number')
                ->sortable()
                ->searchable(),

            Column::make('Gender', 'gender')
                ->sortable()
                ->searchable(),

            Column::make('Home address', 'home_address')
                ->sortable()
                ->searchable(),

            Column::make('Birth date', 'birth_date_formatted')
                ->sortable()
                ->searchable(),



            Column::make('Customer uuid', 'customer_uuid')
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
            Filter::inputText('first_name')->operators(['contains']),
            Filter::inputText('last_name')->operators(['contains']),
            Filter::inputText('phone_number')->operators(['contains']),
            Filter::select('gender', 'select')->dataSource(Customer::select('gender')->distinct()->get())
                ->optionValue('gender')
                ->optionLabel('gender'),
            Filter::inputText('customer_uuid')->operators(['contains']),


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
