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
use App\Models\Company;
use App\Models\Payment;
use Livewire\Component;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\BookedBus;
use Illuminate\Support\Str;
use App\Mail\BookingReceipt;
use App\Models\ExchangeRate;
use Illuminate\Validation\Rule;
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
    public $tax, $discount, $subtotal, $total;
    public $data_raw;
    public $showloader = false;
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
        'sendPdf' => 'sendPdf',
        'checkAvailalableBuses' => 'checkAvailalableBuses'
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


    public function calculateTax($percentage)
    {
        $amount = $this->collect['quantity'] * $this->collect['price'];
        $getFinaltax = $amount * ($percentage / 100);
        $this->collect['amount_raw'] =  $amount;
        $this->collect['tax_raw'] = $getFinaltax;
        $date = date('Y-m-d');
        $check = ExchangeRate::where('fetch_date', $date)->get();
        if ($check->count() == 0) {
            $this->fetchData();
        } else {
            $this->exchange_rate = $check[0]->exchange_rate; // in usd
        }

        // calculations
        $amount_in_usd = $this->collect['amount_raw'] * $this->exchange_rate;
        $tax_in_usd = $this->collect['tax_raw'] * $this->exchange_rate;
        $discount = $this->collect['discount_raw'] * $this->exchange_rate;
        $subtotal = $amount_in_usd;
        $total = $subtotal + $tax_in_usd + $discount;
        $this->amount = $amount_in_usd;
        $this->tax = $tax_in_usd;
        $this->subtotal = number_format(round($subtotal, 2), 2);
        $this->total = number_format(round($total, 2), 2);
        $this->discount = $discount;
    }


    public function validateData()
    {

        if ($this->currentStep == 1) {


            if ($this->showCustomer == false) {
                $this->resetValidation();



                Validator::make([
                    'schedule' => $this->schedule,
                    'route' => $this->route,
                    'customer' => $this->customer,
                    'price' => $this->price,
                    'date' => $this->date,
                    'availability' => $this->availability
                ], [
                    'schedule' => 'required',
                    'route' => 'required',
                    'customer' => 'required',
                    'price' => 'required',

                    'date' => [
                        'required',
                        function (string $attribute, mixed $value, Closure $fail) {
                            if ($this->route != null && $this->schedule != null && $this->customer != null && $this->price != null && $this->date) {

                                $countIf =   Booking::join('buses', 'buses.id', 'bookings.bus_id')
                                    ->where('bookings.customer_id', $this->customer)
                                    ->where('bookings.date_departing', $value)
                                    ->where('buses.route_id', $this->route)
                                    ->where('buses.schedule_id', $this->schedule)
                                    ->where('bookings.is_completed', 0)->count();

                                if ($countIf == 1) {
                                    $fail("You already have an existing booking on this date/time.");
                                } else {

                                    $chosenDate = Carbon::parse($value)->format('Y-m-d');
                                    $currentDate = Carbon::now()->format('Y-m-d H:i:s');
                                    $time = Schedule::find($this->schedule)->check_in_time;
                                    $scheduledDate = $chosenDate . ' ' . $time;

                                    $carbon = Carbon::parse($currentDate)->greaterThan(Carbon::parse($scheduledDate));


                                    if (Carbon::parse($currentDate)->greaterThan(Carbon::parse($scheduledDate)) == true) {
                                        $fail("Sorry, you can not book this bus right now. It is " . Carbon::now()->format('H:i A') . " now ");
                                        //  dd("Current time is less than the given time");

                                        $this->alert('warning', 'Sorry, you can not book this bus right now. It is ' . Carbon::now()->format('H:i A') . ' now');
                                    }


                                    $array =  $this->checkAvailalableBuses();

                                    if (empty($array)) {
                                        $fail("Bus not available, please try again later");

                                        $this->alert('warning', 'Bus not available, please try again later', [
                                            'timer' => 5000,
                                        ]);
                                    } else {
                                        $this->resetErrorBag('date');
                                    }
                                }
                            } else {

                                $fail('The route, schedule, price fields are required.');
                            }
                        },
                    ]
                ])->validate();
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


            ////////////////////////////////////////////////////////////////

            /* -------------------------------------------------------------------------- */
            /*                            check payment method                            */
            /* -------------------------------------------------------------------------- */



            if ($this->payment_method === 'paypal') {
                // Collection of customer data
                $this->collect = [
                    'full_name' => Customer::find($this->customer)->first_name . ' ' . Customer::find($this->customer)->last_name,
                    'email' => Customer::find($this->customer)->user->email,
                    'phone' => Customer::find($this->customer)->phone_number,
                    // 'route' => BusRoute::find($this->route)->from_destination . ' - ' . BusRoute::find($this->route)->to_destination,
                    'price' => $this->price,
                    'schedule' => Schedule::find($this->schedule)->title,
                    'quantity' => 1,
                    'date' => $this->date,
                    'depart_time' => Schedule::find($this->schedule)->depart_time,
                    'check_in_time' => Schedule::find($this->schedule)->check_in_time,
                    'availability' => $this->availability,
                    'payment_method' => $this->payment_method,
                    'route_from' =>  BusRoute::find($this->route)->from_destination,
                    'route_to' => BusRoute::find($this->route)->to_destination,
                    'discount_raw' => BusRoute::find($this->route)->discount_amount
                ];


                // calculate price with tax
                $tax = Company::find(1)->tax_percentage;
                $this->calculateTax($tax);

                //push arrays together
                $myArray = [
                    'customer_id' => $this->customer,
                    'customer_route_id' => $this->route,
                    'customer_schedule_id' => $this->schedule,
                    'customer_amount' => $this->amount,
                    'customer_currency' => 'USD',
                    'customer_tax_amount' => $this->tax,
                    'customer_subtotal' => $this->subtotal,
                    'customer_total' => $this->total,
                    'customer_discount' => $this->discount,
                ];

                $oldArray = $this->collect;

                $myArray = $myArray + $oldArray;
                session()->forget('payment_status');
                session()->put('booking', $myArray);

                $this->collect =  session()->get('booking');

                // Now we have the final collection
            }
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



        //   dd($amount);





        if ($data[1] === 'success') {
            $amount = $data[2]['amount'];
            session()->put('payment_status', 'success');
            $this->paid = true;
            $this->resetValidation('paid');
            $transactionId = $data[0]; // transaction

            $payment = new Payment([
                'transaction_id' => $transactionId,
                'price' => $this->price,
                'amount_paid' =>   $amount['value'],
                'payment_method' => $this->payment_method,
                'payment_status' => true,
                'currency' => $amount['currency_code'],
                'tax_amount' => $this->tax,
                'local_currency' => Company::find(1)->company_local_currency,
            ]);

            $paid =   Customer::find($this->customer)->payments()->save($payment);
            $payment_id = $paid->id;


            $bus = Bus::find($this->seatData['bus_id'])->update([
                'route_id' => $this->route,
                'schedule_id' => $this->schedule,
                'date_departing' => $this->date
            ]);

            $booking = Booking::create([
                'payment_id' => $payment_id,
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

            session()->put('booking.payment_method', $this->payment_method);
            session()->put('booking.amount', $amount['value']);
            session()->put('booking.tax_amount', $this->tax);
            session()->put('booking.payment_currency', $amount['currency_code']);
            session()->put('booking.transaction_id',  $data[0]);
            session()->put('booking.payment_date', Carbon::parse($payment->updated_at)->format('d/m/Y'));
            session()->put('booking.seat_no',  Seat::find($this->seatData['seat_id'])->seat_no);
            session()->put('booking.bus_id',  $this->seatData['bus_id']);
            // collection of all data
            $this->collect = session()->get('booking');
            //email data
            $time = Carbon::parse($this->collect['depart_time'])->format('H:i');
            $desc = 'Bus ticket for ' . $this->collect['full_name'] . ', starting off from ' . $this->collect['route_from'] . ' going to ' . $this->collect['route_to'] . ' on ' . $this->collect['date'] . ' at ' . Carbon::parse($this->collect['depart_time'])->format('H:i A');

            $this->data_raw = [
                'ticket_no' => $this->collect['transaction_id'],
                'seat_no' => $this->collect['seat_no'],
                'payment_date' => $this->collect['payment_date'],
                'customer_name' => $this->collect['full_name'],
                'payment_to' => Company::find(1)->company_name,
                'description' => htmlentities($desc),
                'amount' =>  number_format($this->collect['customer_total'], 2),
                'sub_total' =>  number_format($this->collect['customer_subtotal'], 2),
                'total' => number_format($this->collect['customer_total'], 2),
                'discount' =>  number_format($this->collect['customer_discount'], 2),
                'tax' =>  number_format($this->collect['customer_tax_amount'], 2),
                'customer_phone_number' => $this->collect['phone'],
                'customer_email' =>  $this->collect['email'],
                'company_email' => config('mail.from.address'),
                'payment_currency' => $this->collect['payment_currency'],
                'journey_date' => $this->collect['date'],
                'journey_time' => $time,
                'payment_method' => $this->collect['payment_method'],
                'company_name' => Company::find(1)->company_name,
                'company_country' => Company::find(1)->company_country,
                'company_city' => Company::find(1)->company_city,
                'company_state' => Company::find(1)->company_state,
                'company_zip_code' => Company::find(1)->company_zip_code,
                'company_street' => Company::find(1)->company_street,
                'company_local_currency' => Company::find(1)->company_local_currency,
                'inv_no' => Payment::max('id'),
                'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
                'bus_type' => Bus::find($this->collect['bus_id'])->model,
                'bus_serial_no' => Bus::find($this->collect['bus_id'])->serial_number,
                'bus_max_seats' => Bus::find($this->collect['bus_id'])->seats,
                'route_from' =>  $this->collect['route_from'],
                'route_to'  => $this->collect['route_to'],
                'seat_id' => $this->seatData['seat_id'],
                'check_in_time' => Schedule::find($this->schedule)->check_in_time

            ];


            Payment::find($payment_id)->update([
                'customer_data' => $this->data_raw
            ]);

            $this->showloader = true;
            $this->emitSelf('sendPdf');
        } else {


            session()->put('payment_status', 'failure');

            $this->paid = false;
            $this->resetValidation('paid');

            $transactionId = '';

            $this->showloader = true;
            $cus_data = [
                'ticket_no' => '',
                'seat_no' => '',
                'payment_date' => '',
                'customer_name' => '',
                'payment_to' => '',
                'description' => '',
                'amount' =>  '',
                'sub_total' =>  '',
                'total' => '',
                'discount' =>  '',
                'tax' =>  '',
                'customer_phone_number' => '',
                'customer_email' =>  '',
                'company_email' => '',
                'payment_currency' => '',
                'journey_date' => '',
                'journey_time' => '',
                'payment_method' => '',
                'company_name' => '',
                'company_country' => '',
                'company_city' => '',
                'company_state' => '',
                'company_zip_code' => '',
                'company_street' => '',
                'company_local_currency' => '',
                'inv_no' => '',
                'inv_date' => '',
                'bus_type' => '',
                'bus_serial_no' => '',
                'bus_max_seats' => '',
                'route_from' =>  '',
                'route_to'  => '',
                'seat_id' => '',
                'check_in_time' => ''
            ];
            $payment = new Payment([
                'transaction_id' => $transactionId,
                'price' => $this->price,
                'amount_paid' =>  0.00,
                'payment_method' => $this->payment_method,
                'payment_status' => false,
                'tax_amount' => 0.00,
                'is_complete' => false,
                'error_message' => $data[0],
                'currency' => $this->payment_method == 'paypal' ? 'USD' : 'MWK',
                'tax_amount' => $this->tax,
                'local_currency' => Company::find(1)->company_local_currency,
                'customer_data' => $cus_data
            ]);

            $paid =   Customer::find($this->customer)->payments()->save($payment);
            $this->alert('warning', 'Payment failed', [
                'timer' => 5000
            ]);

            $this->showloader = false;
        }
    }

    public function print()
    {

        $this->dispatchBrowserEvent('print');
    }

    public function sendPdf()
    {


        $time = Carbon::parse($this->collect['depart_time'])->format('H:i');
        $desc = 'Bus ticket for ' . $this->collect['full_name'] . ', starting off from ' . $this->collect['route_from'] . ' going to ' . $this->collect['route_to'] . ' on ' . $this->collect['date'] . ' at ' . Carbon::parse($this->collect['depart_time'])->format('H:i A');
        $data = [
            'ticket_no' => $this->collect['transaction_id'],
            'seat_no' => $this->collect['seat_no'],
            'payment_date' => $this->collect['payment_date'],
            'customer_name' => $this->collect['full_name'],
            'payment_to' => Company::find(1)->company_name,
            'description' => htmlentities($desc),
            'amount' =>  number_format($this->collect['customer_total'], 2),
            'sub_total' =>  number_format($this->collect['customer_subtotal'], 2),
            'total' => number_format($this->collect['customer_total'], 2),
            'discount' =>  number_format($this->collect['customer_discount'], 2),
            'tax' =>  number_format($this->collect['customer_tax_amount'], 2),
            'customer_phone_number' => $this->collect['phone'],
            'customer_email' =>  $this->collect['email'],
            'company_email' => config('mail.from.address'),
            'payment_currency' => $this->collect['payment_currency'],
            'journey_date' => $this->collect['date'],
            'journey_time' => $time,
            'payment_method' => $this->collect['payment_method'],
            'company_name' => Company::find(1)->company_name,
            'company_country' => Company::find(1)->company_country,
            'company_city' => Company::find(1)->company_city,
            'company_state' => Company::find(1)->company_state,
            'company_zip_code' => Company::find(1)->company_zip_code,
            'company_street' => Company::find(1)->company_street,
            'company_local_currency' => Company::find(1)->company_local_currency,
            'inv_no' => Payment::max('id'),
            'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            'bus_type' => Bus::find($this->collect['bus_id'])->model,
            'bus_serial_no' => Bus::find($this->collect['bus_id'])->serial_number,
            'bus_max_seats' => Bus::find($this->collect['bus_id'])->seats,
            'route_from' =>  $this->collect['route_from'],
            'route_to'  => $this->collect['route_to'],
            'seat_id' => $this->seatData['seat_id'],
            'check_in_time' => Schedule::find($this->schedule)->check_in_time
        ];



        try {
            //code...



            Mail::to('daliprinc8@gmail.com')

                ->send(new BookingReceipt($data));

            $this->alert(
                'success',
                'Payment was successfull!'
            );

            $this->showloader = false;
            // $this->loading = null;
            //   $this->button = "SUBMIT";

        } catch (\Exception $th) {
            //throw $th;
            $this->alert(
                'warning',
                'Something went wrong! We couldn\'t send you your receipt.'
            );
        }
    }


    public function testMail()
    {
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

    public function checkAvailalableBuses()
    {


        $return = [];
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
            $return = $this->seatData;
        } else if ($checkBookedBuses->count() == 0) {

            // look for some bus in the database
            $checkBus = Bus::where('condition', '!=', 'bad')
                ->whereNull('date_departing')
                ->inRandomOrder()
                ->first();


            if ($checkBus == null) {
                // no bus available
                $this->seatData = [];
                session()->put('seat', $this->seatData);
                $return = [];
            } else {

                // pull out one bus from the database and add the person

                // book the customer
                $chooseSeat = Seat::where('bus_id', '=', $checkBus->id)->where('is_taken', false)->inRandomOrder()->first();

                $this->seatData = [
                    'bus_id' => $checkBus->id,
                    'seat_id' => $chooseSeat->id
                ];

                session()->put('seat', $this->seatData);
                $return = $this->seatData;
            }
        }

        return $return;
    }

    public function updated($propertyName)
    {
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
        session()->forget(['booking', 'payment_status']);
        session()->flash('mailable');
        $this->redirect(url()->previous());
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
            if ($array['payment_method'] == 'paypal') {
                $this->collect = $array;


                $this->customer = $array['customer_id'];
                $this->route = $array['customer_route_id'];
                $this->schedule = $array['customer_schedule_id'];
                $this->price = $array['price'];
                $this->amount = $array['customer_amount'];
                $this->tax = $array['customer_tax_amount'];
                $this->discount = $array['customer_discount'];
                $this->subtotal = $array['customer_subtotal'];
                $this->total = $array['customer_total'];
                $this->date = $array['date'];
                $this->seatData = [
                    'bus_id' => $seatArray['bus_id'],
                    'seat_id' => $seatArray['seat_id']
                ];
                $this->availability = $array['availability'];
            }

            $this->currentStep = 2;
        } else if (session()->has('booking')  && session()->has('payment_status')) {

            if (session()->get('payment_status') == 'success') {
                $array = session()->get('booking');
                $seatArray = session()->get('seat');

                if ($array['payment_method'] == 'paypal') {
                    $this->collect = $array;
                    $this->customer = $array['customer_id'];
                    $this->route = $array['customer_route_id'];
                    $this->schedule = $array['customer_schedule_id'];
                    $this->price = $array['price'];
                    $this->amount = $array['customer_amount'];
                    $this->tax = $array['customer_tax_amount'];
                    $this->discount = $array['customer_discount'];
                    $this->subtotal = $array['customer_subtotal'];
                    $this->total = $array['customer_total'];
                    $this->date = $array['date'];
                    $this->availability = $array['availability'];
                    $this->seatData = [
                        'bus_id' => $seatArray['bus_id'],
                        'seat_id' => $seatArray['seat_id']
                    ];
                }

                $this->currentStep = 3;
                $time = Carbon::parse($this->collect['depart_time'])->format('H:i');
                $desc = 'Bus ticket for ' . $this->collect['full_name'] . ', starting off from ' . $this->collect['route_from'] . ' going to ' . $this->collect['route_to'] . ' on ' . $this->collect['date'] . ' at ' . Carbon::parse($this->collect['depart_time'])->format('H:i A');
                $this->data_raw = [
                    'ticket_no' => $this->collect['transaction_id'],
                    'seat_no' => $this->collect['seat_no'],
                    'payment_date' => $this->collect['payment_date'],
                    'customer_name' => $this->collect['full_name'],
                    'payment_to' => Company::find(1)->company_name,
                    'description' => htmlentities($desc),
                    'amount' =>  number_format($this->collect['customer_total'], 2),
                    'sub_total' =>  number_format($this->collect['customer_subtotal'], 2),
                    'total' => number_format($this->collect['customer_total'], 2),
                    'discount' =>  number_format($this->collect['customer_discount'], 2),
                    'tax' =>  number_format($this->collect['customer_tax_amount'], 2),
                    'customer_phone_number' => $this->collect['phone'],
                    'customer_email' =>  $this->collect['email'],
                    'company_email' => config('mail.from.address'),
                    'payment_currency' => $this->collect['payment_currency'],
                    'journey_date' => $this->collect['date'],
                    'journey_time' => $time,
                    'payment_method' => $this->collect['payment_method'],
                    'company_name' => Company::find(1)->company_name,
                    'company_country' => Company::find(1)->company_country,
                    'company_city' => Company::find(1)->company_city,
                    'company_state' => Company::find(1)->company_state,
                    'company_zip_code' => Company::find(1)->company_zip_code,
                    'company_street' => Company::find(1)->company_street,
                    'company_local_currency' => Company::find(1)->company_local_currency,
                    'inv_no' => Payment::max('id'),
                    'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
                    'bus_type' => Bus::find($this->collect['bus_id'])->model,
                    'bus_serial_no' => Bus::find($this->collect['bus_id'])->serial_number,
                    'bus_max_seats' => Bus::find($this->collect['bus_id'])->seats,
                    'route_from' =>  $this->collect['route_from'],
                    'route_to'  => $this->collect['route_to'],
                    'seat_id' => $this->seatData['seat_id'],
                    'check_in_time' => Schedule::find($this->schedule)->check_in_time
                ];


                // $bookedBus = BookedBus::where('route_id', '=', $this->route)->where('schedule_id', '=', $this->schedule);
            } else {
                $array = session()->get('booking');
                $seatArray = session()->get('seat');
                if ($array['payment_method'] == 'paypal') {

                    $this->collect = $array;
                    $this->availability = $array['availability'];
                    $this->customer = $array['customer_id'];
                    $this->route = $array['customer_route_id'];
                    $this->schedule = $array['customer_schedule_id'];
                    $this->price = $array['price'];
                    $this->amount = $array['customer_amount'];
                    $this->tax = $array['customer_tax_amount'];
                    $this->discount = $array['customer_discount'];
                    $this->subtotal = $array['customer_subtotal'];
                    $this->total = $array['customer_total'];
                    $this->date = $array['date'];
                    $this->seatData = [
                        'bus_id' => $seatArray['bus_id'],
                        'seat_id' => $seatArray['seat_id']
                    ];
                }

                $this->currentStep = 2;
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
