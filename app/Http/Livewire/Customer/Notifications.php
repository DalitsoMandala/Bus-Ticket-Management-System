<?php

namespace App\Http\Livewire\Customer;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Notifications extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalNotifications;
    public $button = "SUBMIT";
    public $status;
    public $notifications;

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
        'readAll' => 'readAll',
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

        $this->showingModalNotifications = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalNotifications = false;
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

    public function readData($id)
    {
        $user = User::find(auth()->user()->id);

        $notification = $user->notifications()->find($id);

        if ($notification) {
            $notification->markAsRead();
            $this->notifications = $user->unreadNotifications;
        }
    }

    public function readAll()
    {

        $user = User::find(auth()->user()->id);

        $notifications = $user->notifications;
        foreach ($notifications as $notification) {
            $notification->markAsRead();
        }
        $this->notifications = $user->unreadNotifications;
    }
    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function mount()
    {

        $user = User::find(auth()->user()->id);

        $this->notifications = $user->unreadNotifications;
    }
    public function render()
    {
        return view('livewire.customer.notifications');
    }
}
