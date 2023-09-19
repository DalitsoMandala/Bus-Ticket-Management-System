<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Booking;
use App\Models\Payment;
use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Overview extends Component
{

    use LivewireAlert;


    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalOverview;
    public $button = "SUBMIT";
    public $status;
    public $customers, $buses, $income, $bookings, $local_income, $usd_income, $bookingsChart, $bookingChartChange, $temp, $popularRoutes;

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

        $this->showingModalOverview = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalOverview = false;
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

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function updatedBookingChartChange($value)
    {


        $filter = '';

        $monthMapping = [
            1 => 'January', 2 => 'February', 3 => 'March',
            4 => 'April', 5 => 'May', 6 => 'June',
            7 => 'July', 8 => 'August', 9 => 'September',
            10 => 'October', 11 => 'November', 12 => 'December'
        ];

        $dayOfWeekMapping = [
            1 => 'Sunday',
            2 => 'Monday',
            3 => 'Tuesday',
            4 => 'Wednesday',
            5 => 'Thursday',
            6 => 'Friday',
            7 => 'Saturday'
        ];
        if ($value == 'month') {


            $bookings2023 = Booking::select(
                DB::raw('MONTH(date_departing) as month'),
                DB::raw('COUNT(*) as total_bookings')
            )
                ->whereYear('date_departing', 2023)
                ->groupBy('month')
                ->get();


            $bookings2023->transform(function ($booking) use ($monthMapping) {
                $booking->month = $monthMapping[$booking->month];
                return $booking;
            });

            $bookingsArray = $bookings2023->toArray();
            // Create an associative array with all months as keys and initialize their total_bookings to 0
            $monthDataMap = [
                "January" => 0,
                "February" => 0,
                "March" => 0,
                "April" => 0,
                "May" => 0,
                "June" => 0,
                "July" => 0,
                "August" => 0,
                "September" => 0,
                "October" => 0,
                "November" => 0,
                "December" => 0,
            ];

            foreach ($bookingsArray as $entry) {
                $monthDataMap[$entry['month']] = $entry['total_bookings'];
            }



            $this->bookingsChart = $monthDataMap;
            $this->dispatchBrowserEvent('updateBookingschart', 'month');
        } else if ($value == 'day') {

            $now = Carbon::now();
            $startOfWeek =
                $now->copy()->startOfWeek(Carbon::SUNDAY)->setTimezone('Africa/Harare'); // Start of the week (Sunday)
            $endOfWeek = $now->copy()->endOfWeek(Carbon::SATURDAY)->copy()->setTimezone('Africa/Harare');  // End of the week (Saturday)


            $bookings2023 = Booking::select(
                DB::raw('DAYOFWEEK(date_departing) as day_of_week'),
                DB::raw('COUNT(*) as total_bookings')
            )
                ->whereYear('date_departing', $now->year)
                ->whereBetween('date_departing', [$startOfWeek, $endOfWeek])
                ->groupBy('day_of_week')
                ->get();



            $bookingsWithDayNames = $bookings2023->map(function ($item) use ($dayOfWeekMapping) {
                return [
                    'day' => $dayOfWeekMapping[$item->day_of_week],
                    'total_bookings' => $item->total_bookings
                ];
            });

            $bookingsWithDayNamesArray = $bookingsWithDayNames->toArray();
            $dayOfWeekMapping = [
                'Sunday' => 0,
                'Monday' => 0,
                'Tuesday' => 0,
                'Wednesday' => 0,
                'Thursday' => 0,
                'Friday' => 0,
                'Saturday' => 0
            ];


            foreach ($bookingsWithDayNamesArray as $entry) {
                $dayName = $entry['day']; // Day name from the provided array
                $totalBookings = $entry['total_bookings'];

                if (array_key_exists($dayName, $dayOfWeekMapping)) {
                    $dayOfWeekMapping[$dayName] = $totalBookings;
                }
            }

            $this->bookingsChart = $dayOfWeekMapping;
            $this->dispatchBrowserEvent('updateBookingschart', 'day');
        } else {


            $now = Carbon::now()->toDateString();

            $bookings2023 = Booking::join('payments', 'bookings.payment_id', 'payments.id')
                ->whereDate('bookings.date_departing', Carbon::today())
                ->select([
                    DB::raw('HOUR(JSON_UNQUOTE(JSON_EXTRACT(`payments`.`customer_data`, "$.journey_time"))) as hour'),
                    DB::raw('MINUTE(JSON_UNQUOTE(JSON_EXTRACT(`payments`.`customer_data`, "$.journey_time"))) as minute'),
                    DB::raw('COUNT(*) as total_bookings'), // Count of bookings for this time
                ])
                ->groupBy('hour', 'minute') // Group by hour and minute
                ->get();

            $hourMinuteArray = $bookings2023->toArray();
            // Initialize the new associative array with 0 counts for all 30-minute intervals in a 24-hour period
            $resultArray = [];

            for ($hour = 0; $hour < 24; $hour++) {
                for ($minute = 0; $minute < 60; $minute += 30) {
                    $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT);
                    $formattedMinute = str_pad($minute, 2, '0', STR_PAD_LEFT);
                    $formattedTime = "$formattedHour:$formattedMinute";
                    $resultArray[$formattedTime] = 0;
                }
            }

            // Update the counts based on the provided array
            foreach ($hourMinuteArray as $item) {
                $formattedTime = sprintf('%02d:%02d', $item['hour'], $item['minute']);
                $resultArray[$formattedTime] = $item['total_bookings'];
            }

            $this->bookingsChart = $resultArray;
            $this->dispatchBrowserEvent('updateBookingschart', 'today');
        }
    }























    public function mount()
    {

        $this->customers = Customer::get()->count();
        $this->buses = Bus::get()->count();
        $this->bookings = Booking::get()->count();

        $getUsd = Payment::select('currency')->distinct()->get();
        $getCurrencies = array();
        foreach ($getUsd as $key => $value) {
            # code...

            $getCurrencies[] = $value->currency;
        }


        $data = array();

        foreach ($getCurrencies as $currency) {
            $income =  Payment::where('currency', $currency)->sum('amount_paid');

            $data["" . $currency . ""] = $income;
        }

        // get income
        $this->income = $data;


        $now = Carbon::now();
        $startOfWeek = $now->startOfWeek();  // Start of the week (Sunday)
        $endOfWeek = $now->endOfWeek();  // End of the week (Saturday)


        $monthMapping = [
            1 => 'January', 2 => 'February', 3 => 'March',
            4 => 'April', 5 => 'May', 6 => 'June',
            7 => 'July', 8 => 'August', 9 => 'September',
            10 => 'October', 11 => 'November', 12 => 'December'
        ];



        $bookings2023 = Booking::select(
            DB::raw('MONTH(date_departing) as month'),
            DB::raw('COUNT(*) as total_bookings')
        )
            ->whereYear('date_departing', $now->year)
            ->groupBy('month')
            ->get();


        $bookings2023->transform(function ($booking) use ($monthMapping) {
            $booking->month = $monthMapping[$booking->month];
            return $booking;
        });

        $bookingsArray = $bookings2023->toArray();
        // Create an associative array with all months as keys and initialize their total_bookings to 0
        $monthDataMap = [
            "January" => 0,
            "February" => 0,
            "March" => 0,
            "April" => 0,
            "May" => 0,
            "June" => 0,
            "July" => 0,
            "August" => 0,
            "September" => 0,
            "October" => 0,
            "November" => 0,
            "December" => 0,
        ];

        foreach ($bookingsArray as $entry) {
            $monthDataMap[$entry['month']] = $entry['total_bookings'];
        }



        $this->bookingsChart = $monthDataMap;




        $popularRoutes =
            Booking::join('payments', 'bookings.payment_id', 'payments.id')
            ->select([
                DB::raw('JSON_UNQUOTE(JSON_EXTRACT(`payments`.`customer_data`, "$.route_from")) as route_from'),
                DB::raw('JSON_UNQUOTE(JSON_EXTRACT(`payments`.`customer_data`, "$.route_to")) as route_to'),
                DB::raw('COUNT(*) as total_bookings'), // Count of bookings for this time
            ])
            ->groupBy('route_from', 'route_to') // Group by hour and minute
            ->get();

        $popularRoutes =  $popularRoutes->toArray();
        $routesArray = array(); //

        foreach ($popularRoutes as $route) {

            $routesArray["" . $route['route_from'] . " to " . $route['route_to'] . ""] = $route['total_bookings'];
        }

        $this->popularRoutes = $routesArray;
    }
    public function render()
    {
        return view('livewire.admin.overview');
    }
}
