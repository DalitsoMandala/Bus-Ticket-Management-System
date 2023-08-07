<?php

namespace App\Http\Livewire\Customer;

use App\Models\Booking;
use Carbon\Carbon;
use App\Models\Payment;
use Livewire\Component;
use Illuminate\Support\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MyBookings extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalMyBookings;
    public $button = "SUBMIT";
    public $status;
    public $travelEvents;
    public $schedules;
    public $time;

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
        'confirm_request' => 'confirm_request',
        'updateEvents' => 'updateEvents',
        'updateDeparture' => 'updateDeparture',
        'updateEventsTest' => 'updateEventsTest',
    ];

    # ---------------------------------------------------------------------------- #
    #                              Livewire rules here                             #
    # ---------------------------------------------------------------------------- #


    protected $rules = [
        'name' => 'required',
    ];


    public function updated($fields)
    {
        $this->validateOnly($fields);
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

        $this->showingModalMyBookings = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalMyBookings = false;
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

    public function mount()
    {

        $mycustomerId =  auth()->user()->customers->first()->id;


        $mypayments = Payment::where('customer_id', $mycustomerId)->get();

        $events = array();
        $schedules = new Collection();
        foreach ($mypayments as $payment) {
            # code...
            $json = json_decode(json_encode($payment->customer_data));
            $getjourneyDate = $json->journey_date . ' ' . $json->journey_time;

            $givenDate  = Carbon::parse($getjourneyDate)->isPast();

            $events[] = [
                'id' => 'event_' . $payment->transaction_id,
                'title' => 'Travel from ' . $json->route_from . ' to ' . $json->route_to,
                'start' => $json->journey_date,
                'className' => $givenDate == false ? 'text-success' :  'text-danger',

            ];

            $schedules->add([
                'date' => $json->journey_date,
                'time' => $json->journey_time,
                'check_in_time' => $json->check_in_time,
                'route_to' => $json->route_to,
                'route_from' => $json->route_from,
                'id' => $payment->transaction_id,
                'data' => [
                    'id' => 'event_' . $payment->transaction_id,
                    'title' => 'Travel from ' . $json->route_from . ' to ' . $json->route_to,
                    'start' => $json->journey_date,
                    'className' => $givenDate == false ? 'success' :  'danger',
                ],
                'is_complete' => $payment->is_complete
            ]);
        }



        $sortedCollection = $schedules->sortByDesc(function ($item) {


            return [$item['date'], $item['time']];
        });

        $this->travelEvents = $events;
        $this->schedules =  $sortedCollection->values()->all();
        //dd($this->schedules);
        $this->time = '2023-08-12 09:00:00';
    }

    public function updateEvents()
    {

        $mycustomerId =  auth()->user()->customers->first()->id;


        $mypayments = Payment::where('customer_id', $mycustomerId)->get();

        $events = array();
        $schedules = new Collection();
        foreach ($mypayments as $payment) {
            # code...
            $json = json_decode(json_encode($payment->customer_data));
            $getjourneyDate = $json->journey_date . ' ' . $json->journey_time;

            $givenDate  = Carbon::parse($getjourneyDate)->isPast();

            $events[] = [
                'id' => 'event_' . $payment->transaction_id,
                'title' => 'Travel from ' . $json->route_from . ' to ' . $json->route_to,
                'start' => $json->journey_date,
                'className' => $givenDate == false ? 'text-success' :  'text-danger',

            ];

            $schedules->add([
                'date' => $json->journey_date,
                'time' => $json->journey_time,
                'check_in_time' => $json->check_in_time,
                'route_to' => $json->route_to,
                'route_from' => $json->route_from,
                'id' => $payment->transaction_id,
                'data' => [
                    'id' => 'event_' . $payment->transaction_id,
                    'title' => 'Travel from ' . $json->route_from . ' to ' . $json->route_to,
                    'start' => $json->journey_date,
                    'className' => $givenDate == false ? 'success' :  'danger',
                ],
                'is_complete' => $payment->is_complete
            ]);
        }



        $sortedCollection = $schedules->sortByDesc(function ($item) {


            return [$item['date'], $item['time']];
        });

        $this->travelEvents = $events;
        $this->schedules =  $sortedCollection->values()->all();
        //dd($this->schedules);
        $this->time = '2023-08-12 09:00:00';
    }

    public function updateDeparture($id)
    {



        $payment = Payment::where('transaction_id', $id)->first();





        Payment::find($payment->id)->update([
            'is_complete' => 1,
        ]);


        Booking::where('payment_id', $payment->id)->first()->update([
            'is_completed' => 1,
        ]);
        $this->emitSelf('updateEvents');
    }

    public function updateEventsTest()
    {

        $this->dispatchBrowserEvent('eventsUpdated');
    }

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function render()
    {

        return view('livewire.customer.my-bookings');
    }
}
