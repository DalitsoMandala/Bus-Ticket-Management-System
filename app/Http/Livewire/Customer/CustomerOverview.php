<?php

namespace App\Http\Livewire\Customer;

use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Booking;
use App\Models\Payment;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CustomerOverview extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalCustomerOverview;
    public $button = "SUBMIT";
    public $status;
    public $totalDepartures, $upcomingBookings, $availableBuses, $successfulPayments, $unsuccessfulPayments;
    public $recentBookings = [];
    public $nextDeparture;

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

        $this->showingModalCustomerOverview = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalCustomerOverview = false;
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
        $customer = auth()->user()->customers->first()->id;
        $totalDepartures = Booking::where('customer_id', $customer)->where('is_completed', true)->count();
        $this->totalDepartures = $totalDepartures;

        $upcomingBookings = Booking::where('customer_id', $customer)->where('date_departing', '>', now())->count();
        $this->upcomingBookings = $upcomingBookings;

        $availableBuses = Bus::where('is_full', false)->where('condition', '!=', 'bad')->count();
        $this->availableBuses = $availableBuses;

        $successfulPayments = Payment::where('customer_id', $customer)->where('payment_status', true)->count();
        $this->successfulPayments = $successfulPayments;

        $unsuccessfulPayments = Payment::where('customer_id', $customer)->where('payment_status', false)->count();
        $this->unsuccessfulPayments = $unsuccessfulPayments;
        $currentDate = Carbon::now();

        //get closest one first
        $booking = Booking::where('customer_id', $customer)->where('date_departing', '>', now())->orderByRaw('ABS(DATEDIFF(date_departing, ?))', [$currentDate])
            ->first();
        $customer_data = json_decode(json_encode($booking->payment->customer_data));
        $nextDeparture = $customer_data->journey_date . ' ' . $customer_data->journey_time;
        if ($booking->count() == 0) {
            $this->nextDeparture = '';
        } else {
            $this->nextDeparture = $nextDeparture;
        }


        $recentBookings =  Booking::where('customer_id', $customer)->latest()->take(2)->get();

        $temp = array();
        foreach ($recentBookings as $key => $value) {

            $temp[] = $value->payment_id;
            # code...
        }

        $checkPayment = Payment::whereIn('id', $temp)->get();

        $this->recentBookings = $checkPayment;
    }

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function render()
    {
        return view('livewire.customer.customer-overview');
    }
}