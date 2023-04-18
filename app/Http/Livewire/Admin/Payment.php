<?php

namespace App\Http\Livewire\Admin;

use Exception;
use Throwable;
use Livewire\Component;
use App\Models\ExchangeRate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;

class Payment extends Component
{


    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalPayment;
    public $button = "SUBMIT";
    public $status;
    public $payment_data;
    public $amount;
    public $exchange_rate;
    public $data;
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
        'check_exchange_rate' => 'check_exchange_rate',
        'save_exchange_rate' => 'save_exchange_rate',
        'check' => 'check',
        'callButton' => 'callButton',
        'fetchData' => 'fetchData',
        'approved' => 'approved',
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

        $this->showingModalPayment = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalPayment = false;
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

   

    public function fetchData()
    {
        $response = Http::get('https://v6.exchangerate-api.com/v6/fe9dad822a73f2a8da92adea/latest/MWK');
        $this->data = $response->json();
        $status = $this->data['result'];
        $from = 'MWK';
        $to = 'USD';
        $rate = $this->data['conversion_rates']['USD'];


        if ($status == 'success') {


            $date = date('Y-m-d');
            ExchangeRate::create([
                'fetch_date' => $date,
                'currency_from' => $from,
                'currency_to' => $to,
                'exchange_rate' => $rate,
            ]);

            return  $this->exchange_rate = $rate;
        }
    }

    public function mount($id)
    {



        try {
            $id = Crypt::decryptString($id);
            $data = json_decode(urldecode($id), true);
            $this->payment_data = $data;

            $date = date('Y-m-d');
            $check = ExchangeRate::where('fetch_date', $date)->get();
            if ($check->count() == 0) {
                $this->fetchData();
            } else {
                $this->exchange_rate = $check[0]->exchange_rate;
            }


            $this->amount = number_format($this->payment_data['price'] * $this->exchange_rate, 2);

            //   dd($this->amount);
        } catch (DecryptException  $e) {
            // ...
            abort(404);
        }
    }

    // public function save_exchange_rate($amount, $to, $from, $rate, $status)
    // {

    //     if ($status == 'success') {


    //         $date = date('Y-m-d');
    //         ExchangeRate::create([
    //             'fetch_date' => $date,
    //             'currency_from' => $from,
    //             'currency_to' => $to,
    //             'exchange_rate' => $rate,
    //         ]);
    //     }
    // }



    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function render()
    {
        return view('livewire.admin.payment');
    }
}
