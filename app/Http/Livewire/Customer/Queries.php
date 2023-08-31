<?php

namespace App\Http\Livewire\Customer;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Queries extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalQueries;
    public $button = "SUBMIT";
    public $status;
    public $msg;
    public $msg_data;
    public $admin;
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
        'sendData' => 'sendData',
        'viewChat' => 'viewChat',
    ];

    # ---------------------------------------------------------------------------- #
    #                              Livewire rules here                             #
    # ---------------------------------------------------------------------------- #


    protected $rules = [
        'msg' => 'required',
    ];
    protected $messages = [
        'msg.required' => 'This field can not be empty.'
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

        $this->showingModalQueries = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalQueries = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #


    public function viewChat()
    {

        $user = User::find(auth()->user()->id);
        $msgs =   Chat::where('user_id', $user->id)->orWhere('recipient_id', $user->id)->get();
        $this->msg_data = $msgs;
    }
    public function save()
    {

        if ($this->edit == '') {
            $validatedData = $this->validate();
            if ($validatedData) {

                $sender = User::find(auth()->user()->id);
                $recipient = User::find(1);

                $chat = new Chat();

                $chat->content = $this->msg;
                $chat->user_id = $sender->id;
                $chat->recipient_id = $recipient->id;
                $chat->save();

                $user = User::find(auth()->user()->id);
                $msgs =   Chat::where('user_id', $user->id)->orWhere('recipient_id', $user->id)->get();
                $this->msg_data = $msgs;
                $this->reset('msg');
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

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $msgs =   Chat::where('user_id', $user->id)->orWhere('recipient_id', $user->id)->get();
        $this->msg_data = $msgs;

        $roles =   User::with('roles')->get();
        $adminRole = Role::where('name', 'admin')->first();
        $usersWithAdminRole = User::whereHas('roles', function ($query) use ($adminRole) {
            $query->where('id', $adminRole->id);
        })->first();

        $this->admin = $usersWithAdminRole->admin;
    }



    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function render()
    {
        return view('livewire.customer.queries', [
            'msg_data' => $this->msg_data
        ]);
    }
}
