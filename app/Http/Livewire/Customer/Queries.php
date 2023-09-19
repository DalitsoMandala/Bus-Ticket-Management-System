<?php

namespace App\Http\Livewire\Customer;

use Carbon\Carbon;
use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use App\Notifications\Reminder;
use Spatie\Permission\Models\Role;
use App\Notifications\AdminNotification;
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
                $user = User::find($chat->recipient_id); // going to another user
                $unreadMessages = Chat::where('user_id', $chat->user_id)->where('recipient_id', $chat->recipient_id)
                    ->where('read_at', null)
                    ->count();

                if ($unreadMessages > 1) {
                    $description = "You have got <b>" . $unreadMessages . "</b> messages from <b>" . User::find($chat->user_id)->customers->first()->first_name . ' ' . User::find($chat->user_id)->customers->first()->last_name . "</b>";
                    $user->notify(new Reminder('New message', $description, route('admin-queries')));
                } else {
                    $description = "You have got a message from <b>" . User::find($chat->user_id)->customers->first()->first_name . ' ' . User::find($chat->user_id)->customers->first()->last_name . "</b><br/> " . $chat->content;
                    $user->notify(new Reminder('New message', $description, route('admin-queries')));
                }




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
        Chat::where('recipient_id', auth()->user()->id)->update([
            'read_at' => Carbon::now(),
        ]);
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
