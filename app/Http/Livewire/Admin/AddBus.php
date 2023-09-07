<?php

namespace App\Http\Livewire\Admin;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\User;
use Livewire\Component;
use App\Notifications\AdminNotification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddBus extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalAddBus;
    public $button = "SUBMIT";
    public $status, $model, $brand, $serial_number, $seats, $condition;


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
        'seats' => 'required|numeric|min:0',
        'brand' => 'required',
        'model' => 'required',
        'serial_number' => 'required'
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

        $this->showingModalAddBus = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalAddBus = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #

    public function save()
    {

        if ($this->edit == '') {
            $validatedData = $this->validate();
            if ($validatedData) {


                $bus =   Bus::create([
                    'model' => $this->model,
                    'brand' => $this->brand,
                    'serial_number' => $this->serial_number,
                    'seats' => $this->seats,
                    'condition' => $this->condition,

                ]);
                for ($i = 1; $i <= $this->seats; $i++) {
                    $seats = [
                        new Seat(['seat_no' => $i, 'is_taken' => false]),

                    ];

                    $bus->number_of_seats()->saveMany($seats);
                }


                $user = User::find(auth()->user()->id);
                $description = 'Added a bus | Brand: ' . $this->brand . ', Model: ' . $this->model . ', S/N: ' . $this->serial_number . '(' . $this->seats . ' seats)';

                $user->notify(new AdminNotification('Bus added ', $description, route('admin-buses')));






                $this->alert(
                    'success',
                    'Created successfully'
                );


                $this->emitTo('admin.buses-table', 'refresh');
                $this->emitSelf('hideModal');
                $this->emitSelf('resetdata');
            }
        } else {


            $validatedData = $this->validate();


            if ($validatedData) {





                Bus::find($this->edit)->update([
                    'model' => $this->model,
                    'brand' => $this->brand,
                    'serial_number' => $this->serial_number,
                    'seats' => $this->seats,
                    'condition' => $this->condition,

                ]);






                $this->alert(
                    'success',
                    'Updated successfully'
                );

                $this->emitTo('admin.buses-table', 'refresh');
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
        $bus = Bus::find($this->edit);
        $this->fill([
            'model' => $bus->model,
            'brand' => $bus->brand,
            'serial_number' => $bus->serial_number,
            'seats' => $bus->seats
        ]);

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

    public function render()
    {
        return view('livewire.admin.add-bus');
    }
}
