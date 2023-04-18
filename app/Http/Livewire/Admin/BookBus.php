<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\BookedBus;
use Illuminate\Support\Str;
use App\Models\ExchangeRate;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\ValidationException;
use Vildanbina\LivewireWizard\WizardComponent;
use SebastianBergmann\Comparator\ObjectComparator;


class BookBus extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalBookBus;
    public $button = "SUBMIT";
    public $status, $customer, $price, $route, $schedule;
    public $currentStep = 1;
    public $totalSteps  = 3;
    public $firstStep = true;
    public $secondStep = true;
    public $thirdStep = true;
    public $email;
    public $gender;
    public $password;
    public $collect;
    public $payment_method = 'paypal';
    public $amount;
    public $exchange_rate, $data;
    public $init = 0;
    public  $first_name, $last_name, $phone_number, $customer_email, $date;
    public $showCustomer = false;
    public $customers = [];
    public $finished_transaction = false;
    public $paid;
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
        'payment' => 'payment',
        'resetCustomer' => 'resetCustomer',
        'updateOptions' => 'updateOptions',
        'loadOptions' => 'loadOptions',
    ];


    public function updatedRoute($value)
    {

        $price = BusRoute::find($value);
        if ($price) {
            $this->price = $price->price;
        }
    }

    public function nextStep()
    {


        //1
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;

        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function resetCustomer()
    {

        if ($this->showCustomer == true) {
            $this->reset(['customer']);
            $this->resetValidation(['customer']);
        } else {
            $this->resetValidation(['customer_email', 'first_name', 'last_name', 'phone_number']);
        }
    }

    public function validateData()
    {

        if ($this->currentStep == 1) {


            if ($this->showCustomer == false) {
                $this->validate([
                    'schedule' => 'required',
                    'route' => 'required',
                    'customer' => 'required',
                    'price' => 'required',
                    'date' => 'required',
                ]);
            } else {

                $this->validate([
                    'schedule' => 'required',
                    'route' => 'required',
                    'price' => 'required',
                    'customer_email' => 'required|email',
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'phone_number' => 'required',
                    'date' => 'required',
                ]);
            }


            $this->collect = [
                'full_name' => Customer::find($this->customer)->first_name . ' ' . Customer::find($this->customer)->last_name,
                'email' => Customer::find($this->customer)->user->email,
                'phone' => Customer::find($this->customer)->phone_number,
                'route' => BusRoute::find($this->route)->from_destination . ' - ' . BusRoute::find($this->route)->to_destination,
                'price' => $this->price,
                'schedule' => Schedule::find($this->schedule)->title,
                'quantity' => 1,
                'date' => $this->date,
            ];

            $amount = $this->collect['quantity'] * $this->collect['price'];

            $this->collect['amount'] =  $amount;

            $date = date('Y-m-d');
            $check = ExchangeRate::where('fetch_date', $date)->get();
            if ($check->count() == 0) {
                $this->fetchData();
            } else {
                $this->exchange_rate = $check[0]->exchange_rate;
            }


            $this->amount = number_format($this->collect['price'] * $this->exchange_rate, 2);


            //push arrays together
            $myArray = [
                'customer_id' => $this->customer,
                'customer_route' => $this->route,
                'customer_price' => $this->price,
                'customer_schedule' => $this->schedule,
                'customer_usd' => $this->amount
            ];

            $oldArray = $this->collect;

            $myArray = $myArray + $oldArray;
            session()->forget('payment_status');
            session()->put('booking', $myArray);
        } else if ($this->currentStep == 2) {
        }
    }

    public function previousStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function payment($data)
    {
        // Handle form submission


        //




        if ($data[1] === 'success') {

            session()->put('payment_status', 'success');
            $this->paid = true;
        } else {
            session()->put('payment_status', 'failure');

            $this->paid = false;
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

        $this->showingModalBookBus = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalBookBus = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #

    public function save()
    {

        if ($this->edit == '') {

            $validatedData = $this->validate([
                'gender' => 'required'
            ]);
            if ($validatedData) {







                $this->alert(
                    'success',
                    'Created successfully'
                );

                $this->emitTo('component', 'refresh');
                $this->emitSelf('hideModal');
                $this->emitSelf('resetdata');
            }
        }
    } // End SAVE

    public function saveCustomer()
    {
        $this->validate([
            'customer_email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required'
        ]);

        $user = User::create([
            'email' => $this->customer_email,
            'name' => $this->first_name . ' ' . $this->last_name,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $customer = new Customer([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'customer_uuid' => Str::upper(Str::random(6)) . $user->id
        ]);



        $user->customers()->save($customer);

        $this->reset('showCustomer');

        $this->dispatchBrowserEvent('refreshSelect', ['array' => Customer::all()->toArray(), 'lastId' => $customer->id]);
        $this->alert(
            'success',
            'Created successfully'
        );
    }



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

    public function mount()
    {

        $this->customers = Customer::all();

        if (session()->has('booking')  && !session()->has('payment_status')) {
            $array = session()->get('booking');


            $this->collect = [
                'full_name' => $array['full_name'],
                'email' => $array['email'],
                'phone' => $array['phone'],
                'route' => $array['route'],
                'price' => $array['price'],
                'schedule' => $array['schedule'],
                'quantity' => $array['quantity'],
                'amount' => $array['amount'],
                'date' => $array['date'],
            ];
            $this->customer = $array['customer_id'];
            $this->route = $array['customer_route'];
            $this->schedule = $array['customer_schedule'];
            $this->price = $array['customer_price'];
            $this->amount = $array['customer_usd'];
            $this->date = $array['date'];
            $this->currentStep = 2;
        } else if (session()->has('booking')  && session()->has('payment_status')) {

            if (session()->get('payment_status') == 'success') {
                $array = session()->get('booking');


                $this->collect = [
                    'full_name' => $array['full_name'],
                    'email' => $array['email'],
                    'phone' => $array['phone'],
                    'route' => $array['route'],
                    'price' => $array['price'],
                    'schedule' => $array['schedule'],
                    'quantity' => $array['quantity'],
                    'amount' => $array['amount']
                ];
                $this->customer = $array['customer_id'];
                $this->route = $array['customer_route'];
                $this->schedule = $array['customer_schedule'];
                $this->price = $array['customer_price'];
                $this->amount = $array['customer_usd'];
                $this->currentStep = 3;


                // $bookedBus = BookedBus::where('route_id', '=', $this->route)->where('schedule_id', '=', $this->schedule);
            } else {
                $array = session()->get('booking');


                $this->collect = [
                    'full_name' => $array['full_name'],
                    'email' => $array['email'],
                    'phone' => $array['phone'],
                    'route' => $array['route'],
                    'price' => $array['price'],
                    'schedule' => $array['schedule'],
                    'quantity' => $array['quantity'],
                    'amount' => $array['amount']
                ];
                $this->customer = $array['customer_id'];
                $this->route = $array['customer_route'];
                $this->schedule = $array['customer_schedule'];
                $this->price = $array['customer_price'];
                $this->amount = $array['customer_usd'];
                $this->currentStep = 2;
            }
        }




        // dd(session()->all());
    }

    public function render()
    {
        return view(
            'livewire.admin.book-bus',
            [
                'routes' => BusRoute::all(),
                'schedules' => Schedule::all(),

            ]
        );
    }
}
