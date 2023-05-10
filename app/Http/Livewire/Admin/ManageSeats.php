<?php

namespace App\Http\Livewire\Admin;

use App\Models\Bus;
use App\Models\Seat;
use Livewire\Component;
use App\Models\Schedule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageSeats extends Component
{

    use LivewireAlert;
    use WithPagination;

    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalManageSeats;
    public $button = "SUBMIT";
    public $status;
    public $currentPage = 1;
    public $perPage = 10;
    public $query;
    public $customer, $schedule_time, $date_departing, $is_booked;
    # ---------------------------------------------------------------------------- #
    #                            Livewire listeners here                           #
    # ---------------------------------------------------------------------------- #

    protected $listeners = [

        'resetdata' => 'resetdata',
        'edit' => 'edit',
        'delete' => 'delete',
        'destroy' => 'destroy',
        'destroyAll' => 'destroyAll',
        'activatemodal' => 'activatemodal',
        'deactivatemodal' => 'deactivatemodal',
        'activate' => 'activate',
        'deactivate' => 'deactivate',
        'hideModal' => 'hideModal',
        'showModal' => 'showModal',
        'change' => 'change',
        'deleteMultiple' => 'deleteMultiple',
        'changeMessage' => 'changeMessage',

    ];

    # ---------------------------------------------------------------------------- #
    #                              Livewire rules here                             #
    # ---------------------------------------------------------------------------- #


    protected $rules = [
        'name' => 'required',
    ];


    public function updated($fields)
    {
    }

    public function cancel($field)
    {
        if ($field === 'all') {
            $this->reset(['schedule_time', 'date_departing', 'is_booked']);
        } else {
            $this->reset("$field");
        }
    }


    # ---------------------------------------------------------------------------- #
    #                       Livewire Modals & Reset Data here                      #
    # ---------------------------------------------------------------------------- #
    public function resetdata()
    {

        $this->reset();
        $this->resetValidation();
    }


    public function showModal()
    {

        $this->showingModalManageSeats = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalManageSeats = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #

    public function save()
    {

        if ($this->edit == '') {
            $validatedData = $this->validate();
            if ($validatedData) {







                $this->alert(
                    'success',
                    'Created successfully'
                );

                $this->emitTo('component', 'refresh');
                $this->emitSelf('hideModal');
                $this->emitSelf('resetdata');
            }
        } else {


            $validatedData = $this->validate();


            if ($validatedData) {









                $this->alert(
                    'success',
                    'Updated successfully'
                );

                $this->emitTo('component', 'refresh');
                $this->emitSelf('hideModal');
                $this->emitSelf('resetdata');
            }
        }
    } // End SAVE


    # ---------------------------------------------------------------------------- #
    #                         ALL OTHER LIVEWIRE FUNCTIONS                         #
    # ---------------------------------------------------------------------------- #

    // Edit modal open with fields inserted

    public function edit($data)
    {


        $this->edit = $data['key'];


        $this->emitSelf('showModal');
    }




    public function delete($data)
    {


        $this->emitTo('component', 'showModal');
        $this->edit = $data['key'];
    }

    // Delete data here

    public function destroy()
    {









        $this->emitTo('component', 'hideModal');
        $this->alert('success', 'Deleted successfully');
        $this->emitTo('component', 'refresh');
        $this->emitSelf('resetdata');
    }

    // checkboxes bulk delete


    public function destroyAll($data)
    {






        //auto change numbering


        //

        $this->emitTo('component', 'hideModal');
        $this->alert('success', 'Item(s) deleted successfully');
        $this->emitTo('component', 'clear');
        $this->emitTo('component', 'refresh');


        $this->emitSelf('resetdata');
    }

    public function deleteMultiple($data)
    {

        $this->emitTo('component', 'changeMessage', $data);

        if (count($data) == 1) {
            $this->edit = $data[0];
        }
    }



    # ---------------------------------------------------------------------------- #
    #                        Livewire Delete Functions here                        #
    # ---------------------------------------------------------------------------- #

    /*
 public $message = " Are you sure you want delete this programme?";
    public $count = 0;
    public $data = [];



    public $showingModalDeleteProgram = false;
    public function showModal()
    {
        $this->reset('message');
        $this->showingModalDeleteProgram = true;

        //    $this->counter++;
    }

    public function hideModal()
    {
        $this->showingModalDeleteProgram = false;
    }

    public function changeMessage($data)
    {
        $this->data = $data;
        $valuesCount = count($data);

        if ($valuesCount == 1) {
            $this->message =  "Are you sure you want delete this programme?";
            $this->showingModalDeleteProgram = true;
            $this->count = 0; //0 means default value to hide the button


        } else if ($valuesCount > 1) {
            $this->message =  "Are you sure you want delete these programmes?";
            $this->showingModalDeleteProgram = true;
            $this->count = 1; // 1 means multiple data


        }
    }

    public function delete()
    {
        $this->emitTo('admin.add-program', 'destroyAll', $this->data);
    }


*/

    public function previousPage()
    {

        $this->currentPage--;
    }


    public function nextPage()
    {

        $this->currentPage++;
    }

    public function mount()
    {
    }
    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function render()
    {

        $seatnumbers = Seat::all();
        $seats = null;


        if ($this->customer != null || $this->schedule_time != null || $this->date_departing  != null || $this->is_booked != null) {

            $seats = Bus::join('seats', 'seats.bus_id', 'buses.id')
                ->leftJoin('bookings', 'bookings.bus_id', 'buses.id')
                ->leftJoin('customers', 'customers.id', 'bookings.customer_id')
                //      ->where('bookings.is_completed', 'false')

                ->when(!empty($this->customer), function ($query) {
                    $query->where('customers.first_name', 'like', '%' . $this->customer . '%');
                })
                ->when(!empty($this->is_booked) && $this->is_booked == "booked", function ($query) {


                    $query->whereNotNull('buses.date_departing');
                })
                ->when(!empty($this->is_booked) && $this->is_booked == "not_booked", function ($query) {


                    $query->whereNull('buses.date_departing');
                })


                ->when(!empty($this->date_departing), function ($query) {
                    $query->where('buses.date_departing', 'like', '%' . $this->date_departing . '%');
                })

                ->when(!empty($this->schedule_time), function ($query) {
                    $query->where('buses.schedule_id', 'like', '%' . $this->schedule_time . '%');
                })

                ->select([
                    'buses.id as id',
                    'buses.serial_number as serial_number',
                    'buses.brand as brand',
                    'buses.model as model_name',
                    'buses.seats as number_of_seats',

                    DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats')

                ])
                ->groupBy('buses.id', 'buses.serial_number', 'buses.brand', 'buses.model', 'buses.seats')
                ->orderBy('taken_seats', 'desc')
                //->get();
                ->paginate($this->perPage);
            // $seats = Bus::join('seats', 'seats.bus_id', '=', 'buses.id')

            //     ->leftJoin('bookings', 'buses.id', '=', 'bookings.bus_id')
            //     ->leftJoin('customers', 'customers.id', '=', 'bookings.customer_id')

            //     // ->when(!empty($this->customer), function ($query) {
            //     //     $query->where('customers.first_name', 'like', '%' . $this->customer . '%');
            //     // })

            //     // ->when(!empty($this->date_departing), function ($query) {
            //     //     $query->where('buses.date_departing', 'like', '%' . $this->date_departing . '%');
            //     // })

            //     // ->when(!empty($this->schedule_time), function ($query) {
            //     //     $query->where('buses.schedule_id', 'like', '%' . $this->schedule_time . '%');
            //     // })
            //     //   ->orWhere('buses.schedule_id', 'like', '%' . $this->schedule_time . '%')
            //     //     ->orWhere('buses.date_departing', 'like', '%' . $this->date_departing . '%')

            //     ->select([
            //         'buses.id as id',
            //         'buses.serial_number as serial_number',
            //         'buses.brand as brand',
            //         'buses.model as model_name',
            //         'buses.seats as number_of_seats',
            //         DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats')

            //     ])
            //     ->groupBy('buses.id', 'buses.serial_number', 'buses.brand', 'buses.model', 'buses.seats')
            //     ->orderBy('taken_seats', 'desc')
            //     //->get();
            //     ->paginate($this->perPage);


        } else {
            $seats = Bus::join('seats', 'seats.bus_id', '=', 'buses.id')

                ->select([
                    'buses.id as id',
                    'buses.serial_number as serial_number',
                    'buses.brand as brand',
                    'buses.model as model_name',
                    'buses.seats as number_of_seats',

                    DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats')

                ])
                ->groupBy('buses.id', 'buses.serial_number', 'buses.brand', 'buses.model', 'buses.seats')
                ->orderBy('taken_seats', 'desc')
                //->get();
                ->paginate($this->perPage);
        }


        return view('livewire.admin.manage-seats', [
            'bus' => $seats,
            'seats' => $seatnumbers,
            'schedules' => Schedule::all(),
            'date' => Bus::whereNotNull('date_departing')->get()
        ]);
    }
}
