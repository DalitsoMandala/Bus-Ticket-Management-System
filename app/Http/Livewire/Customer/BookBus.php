<?php

namespace App\Http\Livewire\Customer;

use Closure;
use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\Bus;
use Dompdf\Options;
use App\Models\Seat;
use App\Models\User;

use App\Models\Booking;
use App\Models\Payment;
use Livewire\Component;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\BookedBus;
use Illuminate\Support\Str;
use App\Mail\BookingReceipt;
use App\Models\ExchangeRate;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BookBus extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalBookBus;
    public $button = "FINISH";
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
    public $canShow;
    public $availability;
    public $seatData;
    public $currency;
    public $loading;
    public $payment_data = [];
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
        'sendPdf' => 'sendPdf'
    ];


    /* -------------------------------------------------------------------------- */
    /*                                   Helpers                                  */
    /* -------------------------------------------------------------------------- */
    public function filterLargest($bus)
    {



        // get the bus that has the largest number of customers
        $maxNumberofTakenSeats = $bus->max('taken_seats');


        $theBus = $bus->where('taken_seats', $maxNumberofTakenSeats)->first();
        return $theBus->id; // the id of the bus that has the largest number of customers booked
    }

    public function previousStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        } else if ($this->currentStep == 1) {

            // $this->reset();
            // $this->booking('')
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
                $this->resetValidation();
                $data = [
                    'schedule' => $this->schedule,
                    'route' => $this->route,
                    'customer' => $this->customer,
                    'price' => $this->price,
                    'date' => $this->date
                ];

                $rules = [
                    'schedule' => 'required',
                    'route' => 'required',
                    'customer' => 'required',
                    'price' => 'required',
                    'canShow' => ['required_if:canShow,false'],
                    'date' => [
                        'required',
                        function (string $attribute, mixed $value, Closure $fail) {
                            $countIf =   Booking::where('customer_id', $this->customer)->where('date_departing', $value)->where('is_completed', 0)->count();

                            if ($countIf == 1) {
                                $fail("You have an existing booking on this day, choose another day.");
                            }
                        },
                    ],

                ];



                // $this->validate([
                //     'schedule' => 'required',
                //     'route' => 'required',
                //     'customer' => 'required',
                //     'price' => 'required',
                //     'date' => 'required',
                // ]);


                $validator = Validator::make($data, $rules)->validate();
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
                'depart_time' => Schedule::find($this->schedule)->depart_time,
                'check_in_time' => Schedule::find($this->schedule)->check_in_time
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
            $this->validate([
                'paid' => 'required',
            ], [
                'paid.required' => 'required',
            ]);
        } else if ($this->currentStep == 3) {
            $this->resetErrorBag();
            $this->resetValidation();
        }
    }



    public function payment($data)
    {
        // Handle form submission


        //

        $amount = $data[2]['amount'];

        //   dd($amount);





        if ($data[1] === 'success') {

            session()->put('payment_status', 'success');
            $this->paid = true;
            $this->resetValidation('paid');
            $transactionId = $data[0];
            $payment = Payment::create([
                'transaction_id' => $transactionId,
                'price' => $this->price,
                'amount_paid' =>   $amount['value'],
                'payment_method' => $this->payment_method,
                'payment_status' => true,
                'currency' => $amount['currency_code'],

            ]);

            $bus = Bus::find($this->seatData['bus_id'])->update([
                'route_id' => $this->route,
                'schedule_id' => $this->schedule,
                'date_departing' => $this->date
            ]);

            $booking = Booking::create([
                'payment_id' => $payment->id,
                'bus_id' => $this->seatData['bus_id'], //he
                'seat_id' => $this->seatData['seat_id'],
                'date_departing' => $this->date,
                'customer_id' => $this->customer

            ]);



            Seat::find($this->seatData['seat_id'])->update([
                'is_taken' => true,
            ]);

            // after that update bus status if full or not

            $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                ->where('buses.id', $this->seatData['bus_id'])
                ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                ->groupBy('buses.id')
                ->orderBy('taken_seats', 'desc')
                ->first();


            if ($remainingSeats->remaining_seats == 0) {

                Bus::find($this->seatData['bus_id'])->update([
                    'is_full' => true,
                ]);

                //set full status


            }




            session()->put('booking.payment_type', $this->payment_method);

            session()->put('booking.amount', $amount['value']);
            session()->put('booking.payment_currency', $amount['currency_code']);
            session()->put('booking.transaction_id',  $data[0]);
            session()->put('booking.payment_date',  $payment->updated_at);
            session()->put('booking.seat_no',  Seat::find($this->seatData['seat_id'])->seat_no);
            $array = session()->get('booking');


            $this->payment_data = [
                'payment_type' => $array['payment_type'],
                'payment_currency' => $array['payment_currency'],
                'transaction_id' => $array['transaction_id'],
                'amount' => $array['amount'],
                'payment_date' => Carbon::parse($array['payment_date'])->format('d/m/Y'),
                'seat_no' => Seat::find($this->seatData['seat_id'])->seat_no
            ];
            $this->alert(
                'success',
                'Payment was successfull!'
            );
        } else {
            session()->put('payment_status', 'failure');

            $this->paid = false;
            $this->resetValidation('paid');

            $transactionId = $data[0];
            $payment = Payment::create([
                'transaction_id' => $transactionId,
                'price' => $this->price,
                'amount_paid' =>  0.00,
                'payment_method' => $this->payment_method,
                'payment_status' => false
            ]);
        }
    }

    public function print()
    {

        $this->dispatchBrowserEvent('print');
    }

    public function sendPdf()
    {
        $time = Carbon::parse($this->collect['depart_time'])->format('H:i A');
        $desc = 'Bus ticket, Location : ' . $this->collect['route'] . ', Date/Time : ' . $this->collect['schedule'] . ' (' . $time . ')';

        $data = [
            'ticket_no' => $this->payment_data['transaction_id'],
            'seat_no' =>  $this->payment_data['seat_no'],
            'payment_date' => $this->payment_data['payment_date'],
            'client' => $this->collect['full_name'],
            'payment_to' => config('app.name'),
            'description' => htmlentities($desc),
            'amount' => $this->payment_data['amount'],
            'sub_total' => $this->payment_data['amount'] * 1,
            'total_amount' => $this->payment_data['amount'] * 1,
            'customer_phone_number' => $this->collect['phone'],
            'customer_email' => $this->collect['email'],
            'company_email' => config('mail.from.address'),
        ];





        try {
            //code...


            session()->forget(['booking', 'payment_status']);
            Mail::to('daliprinc8@gmail.com')

                ->send(new BookingReceipt($data));


            $this->loading = null;
            $this->button = "SUBMIT";
            Session::flash('mailable');
            $this->redirect(url()->previous());
        } catch (\Exception $th) {
            //throw $th;
            $this->alert(
                'warning',
                'Something went wrong!'
            );

            $this->redirect(url()->previous());
        }

        // Mail sent successfully

    }

    public function clear()
    {
        $this->currentStep = 1;
        session()->forget(['booking', 'payment_status']);
        $this->reset();
        $this->customers = Customer::all();
        $this->customer = auth()->user()->customers->first()->id;
    }


    /* -------------------------------------------------------------------------- */
    /*                               End of Helpers                               */
    /* -------------------------------------------------------------------------- */


    /* -------------------------------------------------------------------------- */
    /*                              Livewire Updated                              */
    /* -------------------------------------------------------------------------- */

    public function updatedRoute($value)
    {

        $price = BusRoute::find($value);
        if ($price) {
            $this->price = $price->price;
        }
    }



    public function updated($propertyName)
    {

        if ($this->route != null && $this->schedule != null && $this->customer != null && $this->price != null && $this->date) {


            $customer = auth()->user()->customers->first();
            $customerId = $customer->id;
            $price = $this->price;
            $date = $this->date;
            $route = BusRoute::find($this->route);
            $route = $route->id;
            $schedule  = Schedule::find($this->schedule);
            $schedule = $schedule->id;


            $checkBookedBuses = Bus::where('is_full', false)
                ->whereNotNull('date_departing')
                ->where('schedule_id', $schedule)
                ->where('route_id', $route)
                ->where('date_departing', $date)
                ->get();

            if ($checkBookedBuses->count() > 0) {

                $bookedBusSeatChecker = new Collection;
                foreach ($checkBookedBuses as $bookedBus) {




                    // check if the buses are the same as the route and get the number of seats available
                    $bus_seat_route_takenSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                        ->where('is_full', false)
                        ->where('buses.id', $bookedBus->id)
                        ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                        ->groupBy('buses.id')
                        ->orderBy('taken_seats', 'desc')
                        ->first();

                    if ($bus_seat_route_takenSeats != null) {
                        $bookedBusSeatChecker->push($bus_seat_route_takenSeats);
                    }
                }


                $busId =  $this->filterLargest($bookedBusSeatChecker);



                $bookingbusId = Bus::find($busId);
                // book the customer
                $chooseSeat = Seat::where('bus_id', '=', $busId)->where('is_taken', false)->inRandomOrder()->first();

                $this->seatData = [
                    'bus_id' => $busId,
                    'seat_id' => $chooseSeat->id
                ];

                session()->put('seat', $this->seatData);

                // book a bus and set seats if they are full or not
                $this->canShow = true;
            } else if ($checkBookedBuses->count() == 0) {

                // look for some bus in the database
                $checkBus = Bus::where('condition', '!=', 'bad')
                    ->whereNull('date_departing')
                    ->inRandomOrder()
                    ->first();


                if ($checkBus == null) {
                    // no bus available
                    $this->canShow = false;
                } else {
                    $this->canShow = true;
                    // pull out one bus from the database and add the person

                    // book the customer
                    $chooseSeat = Seat::where('bus_id', '=', $checkBus->id)->where('is_taken', false)->inRandomOrder()->first();

                    $this->seatData = [
                        'bus_id' => $checkBus->id,
                        'seat_id' => $chooseSeat->id
                    ];

                    session()->put('seat', $this->seatData);
                }
            }
        } else {
            $this->canShow = null;

            session()->forget('seat');
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                           End of Livewire Updated                          */
    /* -------------------------------------------------------------------------- */



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




        $this->loading = 'PLEASE WAIT...';
        $this->button = $this->loading;
        $this->emitSelf('sendPdf');






        //  $this->emitSelf('hideModal');
        //  $this->emitSelf('resetdata');
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
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #



    public function mount()
    {



        $this->customers = Customer::all();
        $this->customer = auth()->user()->customers->first()->id;





        if (session()->has('booking')  && !session()->has('payment_status')) {
            $array = session()->get('booking');
            $seatArray = session()->get('seat');

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
                'depart_time' => $array['depart_time'],
                'check_in_time' => $array['check_in_time']

            ];
            $this->customer = $array['customer_id'];
            $this->route = $array['customer_route'];
            $this->schedule = $array['customer_schedule'];
            $this->price = $array['customer_price'];
            $this->amount = $array['customer_usd'];
            $this->date = $array['date'];
            $this->seatData = [
                'bus_id' => $seatArray['bus_id'],
                'seat_id' => $seatArray['seat_id']
            ];
            //     $this->currentStep = 2;
        } else if (session()->has('booking')  && session()->has('payment_status')) {

            if (session()->get('payment_status') == 'success') {
                $array = session()->get('booking');
                $seatArray = session()->get('seat');


                $this->collect = [
                    'full_name' => $array['full_name'],
                    'email' => $array['email'],
                    'phone' => $array['phone'],
                    'route' => $array['route'],
                    'price' => $array['price'],
                    'schedule' => $array['schedule'],
                    'quantity' => $array['quantity'],
                    'amount' => $array['amount'],
                    'seat_no' => $array['seat_no'],
                    'depart_time' => $array['depart_time'],
                    'check_in_time' => $array['check_in_time']

                ];
                $this->customer = $array['customer_id'];
                $this->route = $array['customer_route'];
                $this->schedule = $array['customer_schedule'];
                $this->price = $array['customer_price'];
                $this->amount = $array['customer_usd'];
                $this->payment_data = [
                    'payment_type' => $array['payment_type'],
                    'payment_currency' => $array['payment_currency'],
                    'transaction_id' => $array['transaction_id'],
                    'amount' => $array['amount'],
                    'payment_date' => Carbon::parse($array['payment_date'])->format('d/m/Y'),
                    'seat_no' =>  $array['seat_no']
                ];

                $this->seatData = [
                    'bus_id' => $seatArray['bus_id'],
                    'seat_id' => $seatArray['seat_id']
                ];
                $this->currentStep = 3;


                // $bookedBus = BookedBus::where('route_id', '=', $this->route)->where('schedule_id', '=', $this->schedule);
            } else {
                $array = session()->get('booking');
                $seatArray = session()->get('seat');

                $this->collect = [
                    'full_name' => $array['full_name'],
                    'email' => $array['email'],
                    'phone' => $array['phone'],
                    'route' => $array['route'],
                    'price' => $array['price'],
                    'schedule' => $array['schedule'],
                    'quantity' => $array['quantity'],
                    'amount' => $array['amount'],
                    'depart_time' => $array['depart_time'],
                    'check_in_time' => $array['check_in_time']

                ];
                $this->customer = $array['customer_id'];
                $this->route = $array['customer_route'];
                $this->schedule = $array['customer_schedule'];
                $this->price = $array['customer_price'];
                $this->amount = $array['customer_usd'];
                $this->seatData = [
                    'bus_id' => $seatArray['bus_id'],
                    'seat_id' => $seatArray['seat_id']
                ];
                //   $this->currentStep = 2;
            }
        }




        // dd(session()->all());
    }



    public function render()
    {


        return view('livewire.customer.book-bus', [
            'routes' => BusRoute::all(),
            'schedules' => Schedule::all(),

        ]);
    }
}
