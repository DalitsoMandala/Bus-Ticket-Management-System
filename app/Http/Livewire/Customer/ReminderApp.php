<?php

namespace App\Http\Livewire\Customer;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Payment;
use Livewire\Component;
use App\Notifications\Reminder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ReminderApp extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalReminderApp;
    public $button = "SUBMIT";
    public $status;
    public $bookings = [];

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
        'checkTime' => 'checkTime',
        'clearTime' => 'clearTime',
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

        $this->showingModalReminderApp = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalReminderApp = false;
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

    public function clearTime($booking_id)
    {


        $find = Booking::find($booking_id);

        if ($find->is_notified == false) {

            Booking::find($booking_id)->update([
                'is_notified' => true,
                'is_completed' => true
            ]);
        }
    }

    public function checkTime($value)
    {

        if ($value == '30min') {
            $user = User::find(auth()->user()->id);
            $title = 'Bus Departure';
            $description = 'Your bus will leave in 30 minutes!';
            $link = route('customer-bookings');
            $user->notify(new Reminder($title, $description, $link));
        }

        if ($value == '10min') {
            $user = User::find(auth()->user()->id);
            $title = 'Bus Departure';
            $description = 'Your bus will leave in 10 minutes!';
            $link = route('customer-bookings');
            $user->notify(new Reminder($title, $description, $link));
        }

        if ($value == '5min') {
            $user = User::find(auth()->user()->id);
            $title = 'Bus Departure';
            $description = 'Your bus will leave in 5 minutes!';
            $link = route('customer-bookings');
            $user->notify(new Reminder($title, $description, $link));
        }

        if ($value == 'none') {

            $user = User::find(auth()->user()->id);
            $title = 'Bus Departure';
            $description = 'Your bus has departed!';
            $link = route('customer-bookings');
            $user->notify(new Reminder($title, $description, $link));
        }
        //dd($value);
    }

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #
    public function mount()
    {
        $user = User::find(auth()->user()->id); // Assuming the user is authenticated



        $customer = User::find(auth()->user()->id)->customers->first(); // Assuming the user is authenticated
        $booking  = Booking::where('customer_id', $customer->id)->get();



        foreach ($booking as $key => $book) {


            $getDepartDate = Payment::find($book->payment_id)->customer_data['journey_date'];
            $getDepartTime = Payment::find($book->payment_id)->customer_data['journey_time'];

            $targetDate = Carbon::parse($getDepartDate . ' ' . $getDepartTime)->format('Y-m-d H:i:s');
            $currentDateTime = Carbon::now();

            $minutesDifference = $currentDateTime->diffInMinutes($targetDate);
            $secondsDifference = $currentDateTime->diffInSeconds($targetDate);

            $this->bookings[] = [
                'id' => $book->id,
                'date' => $targetDate
            ];
            // if ($minutesDifference === 60) {
            //     $title = 'Bus Departure';
            //     $description = 'Your bus will leave in an hour!';
            //     $link = route('customer-bookings');
            //     Notification::send($user, new Reminder($title, $description, $link));



            //     $user->notify(new Reminder($title, $description, $link));
            // } else if ($minutesDifference === 10) {
            //     $title = 'Bus Departure';
            //     $description = 'Your bus will leave in 10 minutes!';
            //     $link = route('customer-bookings');
            //     Notification::send($user, new Reminder($title, $description, $link));

            //     $user->notify(new Reminder($title, $description, $link));
            // } else if ($minutesDifference === 5) {

            //     $title = 'Bus Departure';
            //     $description = 'Your bus will leave in 5 minutes!';
            //     $link = route('customer-bookings');
            //     Notification::send($user, new Reminder($title, $description, $link));

            //     $user->notify(new Reminder($title, $description, $link));
            // }


            // if ($secondsDifference === 0) {

            //     $title = 'Bus Departure';
            //     $description = 'Your bus has departed!';
            //     $link = route('customer-bookings');
            //     Notification::send($user, new Reminder($title, $description, $link));

            //     $user->notify(new Reminder($title, $description, $link));
            // }



            # code...
        }

        //  dd($this->bookings);
    }



    public function render()
    {
        return view('livewire.customer.reminder-app');
    }
}
