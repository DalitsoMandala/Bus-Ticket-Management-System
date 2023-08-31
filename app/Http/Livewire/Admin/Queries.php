<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    public $people;
    public $selected;
    public $selectedUser, $search, $result;
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

    public function save()
    {

        if ($this->edit == '') {
            $validatedData = $this->validate();
            if ($validatedData) {


                $sender = User::find(auth()->user()->id);
                $recipient = User::find($this->selected);

                $chat = new Chat();

                $chat->content = $this->msg;
                $chat->user_id = $sender->id;
                $chat->recipient_id = $recipient->id;
                $chat->save();

                $this->emitSelf('viewChat', $this->selected);

                $this->reset('msg');
                //dd($this->selected);
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

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function updatedSearch($value)
    {
        if ($value != null) {
            $search = $value;
            $data = Customer::where(function ($query) use ($search) {
                $query->where('customers.customer_uuid', 'LIKE', '%' . $search . '%')
                    ->Orwhere('customers.first_name', 'LIKE', '%' . $search . '%')
                    ->Orwhere('customers.last_name', 'LIKE', '%' . $search . '%');
            })

                ->get();
            $ids = array();
            if (count($data) > 0) {

                foreach ($data as $arrays) {

                    $user = User::find($arrays->user_id);
                    $messages = $user->sentMessages;
                    if (count($messages) > 0) {
                        $ids[] = $arrays->user_id;
                    }
                }

                $msgs =   Chat::whereIn('user_id', $ids)
                    ->select([
                        'chat.*',
                    ])
                    ->orderBy('created_at', 'desc')->get();

                $chat =  $msgs->groupBy('user_id');

                $collection = collect();

                foreach ($chat as $user_id => $content) {
                    # code...
                    $unred = 0;
                    foreach ($content as $another_value) {

                        if ($another_value->read_at == null) {
                            $unred++;
                        }
                    }

                    $collection->push([
                        'user_id' => $user_id,
                        'content' => $content,
                        'unred' => $unred
                    ]);
                }

                $this->people = $collection;
            } else {
                $this->people = [];
            }
        } else {
            $user = User::find(auth()->user()->id);
            $msgs =   Chat::where('user_id', $user->id)->OrWhere('recipient_id', $user->id)
                ->select([
                    'chat.*',
                ])
                ->orderBy('created_at', 'desc')->get();

            $chat =  $msgs->groupBy('user_id');
            $collection = collect();

            foreach ($chat as $user_id => $content) {
                # code...
                $unred = 0;
                foreach ($content as $another_value) {

                    if ($another_value->read_at == null) {
                        $unred++;
                    }
                }

                $collection->push([
                    'user_id' => $user_id,
                    'content' => $content,
                    'unred' => $unred
                ]);
            }

            $this->people = $collection;
        }
    }
    public function viewChat($user_id)
    {


        $senderId = Auth::user()->id;
        $receiverId = $user_id;
        $msgs =   Chat::where(function ($query) use ($senderId, $receiverId) {
            $query->where('user_id', $senderId)
                ->where('recipient_id', $receiverId);
        })->orWhere(function ($query) use ($senderId, $receiverId) {
            $query->where('user_id', $receiverId)
                ->where('recipient_id', $senderId);
        })->orderBy('created_at', 'asc')->get();

        //Update
        Chat::where('user_id', $user_id)->update([
            'read_at' => Carbon::now()
        ]);

        $this->msg_data = $msgs;
        $this->selected = $user_id;

        $this->selectedUser = User::find($user_id)->customers->first()->first_name . ' ' . User::find($user_id)->customers->first()->last_name;
    }
<<<<<<< HEAD


=======
>>>>>>> 8a0f52d914dd1b773abd0c08053fc5af1165d51d
    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $msgs =   Chat::where('user_id', $user->id)->OrWhere('recipient_id', $user->id)
            ->select([
                'chat.*',
            ])
            ->orderBy('created_at', 'desc')->get();

        $chat =  $msgs->groupBy('user_id');
        $collection = collect();

        foreach ($chat as $user_id => $content) {
            # code...
            $unred = 0;
            foreach ($content as $another_value) {

                if ($another_value->read_at == null) {
                    $unred++;
                }
            }

            $collection->push([
                'user_id' => $user_id,
                'content' => $content,
                'unred' => $unred
            ]);
        }

        $this->people = $collection;
        $this->msg_data = [];
    }
    public function render()
    {
        return view('livewire.admin.queries', [
            'msg_data' => $this->msg_data,
            'people' => $this->people
        ]);
    }
}
