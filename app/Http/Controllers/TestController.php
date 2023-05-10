<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\BookedBus;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function test()
    {

        $faker = Faker::create();

        $customer = Customer::inRandomOrder()->first();
        $customerId = $customer->id;
        $price = $faker->numberBetween(10000, 30000);
        $date = date('Y-m-d');
        $route = BusRoute::find(1);
        $route = $route->id;
        $schedule  = Schedule::find(1);
        $schedule = $schedule->id;

        //check available buses

        $bookedBus =  BookedBus::inRandomOrder()->get();


        $bookedbuses = new Collection();

        foreach ($bookedBus as $bus) {
            # code...
            $bookedbuses->push($bus->bus_id);
        }




        // start with booked buses check if there is any booked bus available
        if ($bookedbuses->count() > 0) {
            //if any bus has been booked

            //loop through all available buses and check if either matches the customers specification
            $bookedBusSeatChecker = new Collection();
            foreach ($bookedbuses as $availableBus) {


                //check if the buses are the same as the route and get the number of seats available
                $bus_seat_route_takenSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                    ->join('booked_buses', 'booked_buses.bus_id', '=', 'buses.id')
                    ->where('booked_buses.schedule_id', $schedule)
                    ->where('booked_buses.route_id', $route)
                    ->where('booked_buses.date_departing', $date)
                    ->where('is_full', false)
                    ->where('buses.id', $availableBus)
                    ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                    ->groupBy('buses.id')
                    ->orderBy('taken_seats', 'desc')
                    ->first();

                if ($bus_seat_route_takenSeats != null) {
                    $bookedBusSeatChecker->push($bus_seat_route_takenSeats);
                }
            }


            if (!$bookedBusSeatChecker->isEmpty()) {

                function filterLargest($bus)
                {

                    // get the bus that has the largest number of customers
                    $maxNumberofTakenSeats = $bus->max('taken_seats');
                    $theBus = $bus->where('taken_seats', $maxNumberofTakenSeats)->first();
                    return $theBus->id; // the id of the bus that has the largest number of customers booked
                }



                $busId =  filterLargest($bookedBusSeatChecker);
                $bookingbusId = BookedBus::where('bus_id', $busId)->first();
                // book the customer
                $chooseSeat = Seat::where('bus_id', '=', $busId)->where('is_taken', false)->inRandomOrder()->first();


                Seat::find($chooseSeat->id)->update([
                    'is_taken' => true,
                ]);


                $booking = Booking::create([
                    'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                    'booked_bus_id' => $bookingbusId->id, //here
                    'seat_id' => $chooseSeat->id,
                    'date_departing' => $date,
                    'customer_id' => $customerId
                ]);


                // after that update bus status if full or not

                $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                    ->where('buses.id', $busId)
                    ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                    ->groupBy('buses.id')
                    ->orderBy('taken_seats', 'desc')
                    ->first();

                if ($remainingSeats->remaining_seats == 0) {

                    BookedBus::where('bus_id', $busId)->update([
                        'is_full' => true,
                    ]);

                    //set full status


                }
            } else {


                // buses of this route is not available

                // check from booked buses list
                $bookedBuses = BookedBus::select('bus_id')->get();

                $getBookedIds = array();

                foreach ($bookedBuses as $bus) {
                    # code...

                    $getBookedIds[] = $bus->bus_id;
                }



                // now we choose a bus that is not in the list of booked buses and should be of good condition

                $buses = Bus::where('buses.condition', '!=', 'bad')
                    ->whereNotIn('id', $getBookedIds)
                    ->select(['id as bus_id'])
                    ->inRandomOrder()
                    ->get();



                if ($buses->isEmpty()) {

                    dd('no buses available at the moment');
                } else {

                    $bus = $buses->first();

                    $firstBus = $bus->bus_id;

                    // get all details of the customer and book the bus and first person

                    $bookingABus = BookedBus::create([
                        'date_departing' => $date,
                        'schedule_id' => $schedule,
                        'route_id' => $route,
                        'bus_id' => $firstBus
                    ]);



                    $chooseSeat = Seat::where('bus_id', '=', $firstBus)->where('is_taken', false)->inRandomOrder()->first();

                    Seat::find($chooseSeat->id)->update([
                        'is_taken' => true,
                    ]);


                    $booking = Booking::create([
                        'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                        'booked_bus_id' => $bookingABus->id,
                        'seat_id' => $chooseSeat->id,
                        'date_departing' => $date,
                        'customer_id' => $customerId
                    ]);

                    // after that update bus status if full or not

                    $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                        ->where('buses.id', $firstBus)
                        ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                        ->groupBy('buses.id')
                        ->orderBy('taken_seats', 'desc')
                        ->first();

                    if ($remainingSeats->remaining_seats == 0) {

                        BookedBus::where('bus_id', $firstBus)->update([
                            'is_full' => true,
                        ]);

                        //set full status


                    }
                }
            }
        } else {

            // if there is no bus booked in the database then...
            // get all good conditioned buses and choose the first one
            $buses = Bus::where('condition', '!=', 'bad')->inRandomOrder()->pluck('id');
            $firstBus = $buses->first();

            // get all details of the customer and book the bus and first person

            $bookingABus = BookedBus::create([
                'date_departing' => $date,
                'schedule_id' => $schedule,
                'route_id' => $route,
                'bus_id' => $firstBus
            ]);



            $chooseSeat = Seat::where('bus_id', '=', $firstBus)->where('is_taken', false)->inRandomOrder()->first();

            Seat::find($chooseSeat->id)->update([
                'is_taken' => true,
            ]);


            $booking = Booking::create([
                'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                'booked_bus_id' => $bookingABus->id,
                'seat_id' => $chooseSeat->id,
                'date_departing' => $date,
                'customer_id' => $customerId
            ]);

            // after that update bus status if full or not

            $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                ->where('buses.id', $firstBus)
                ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                ->groupBy('buses.id')
                ->orderBy('taken_seats', 'desc')
                ->first();

            if ($remainingSeats->remaining_seats == 0) {

                BookedBus::where('bus_id', $firstBus)->update([
                    'is_full' => true,
                ]);

                //set full status


            }
        }














        // if ($bookedBus->count() > 0) {

        //     // for buses that are already booked

        //     $getBuses = new Collection();
        //     foreach ($bookedBus as $bus) {
        //         # code...

        //         $getBuses->push($bus->id);
        //     }



        //     $buses_withSeats = new Collection();


        //     foreach ($getBuses as $busId) {
        //         # code...

        //         $seats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
        //             ->where('buses.id', $busId)
        //             ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'))
        //             ->groupBy('buses.id')
        //             ->orderBy('taken_seats', 'desc')
        //             ->first();

        //         $buses_withSeats->push($seats);
        //     }



        //     foreach ($buses_withSeats as $bus) {
        //         # code...

        //         $checkFull = BookedBus::where('bus_id', $bus->id)->select(['is_full'])->first();

        //         if ($checkFull->is_full === 0) {
        //             $chooseSeat = Seat::where('bus_id', '=', $bus->id)->where('is_taken', false)->inRandomOrder()->first();

        //             Seat::find($chooseSeat->id)->update([
        //                 'is_taken' => true,
        //             ]);


        //             $booking = Booking::create([
        //                 'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
        //                 'booked_bus_id' => $bus->id,
        //                 'seat_id' => $chooseSeat->id,
        //                 'date_departing' => $date
        //             ]);



        //             $seats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
        //                 ->where('buses.id', $bus->id)
        //                 ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats '))
        //                 ->groupBy('buses.id')
        //                 ->orderBy('remaining_seats', 'desc')
        //                 ->first();



        //             break;
        //         } else {

        //             continue;
        //         }
        //     }
        // } else {
        //     $getBuses = new Collection();


        //     $buses = Bus::where('condition', '!=', 'bad')->inRandomOrder()->get();
        //     foreach ($buses as $bus) {
        //         # code...

        //         $getBuses->push($bus->id);
        //     }
        // }




        //  $bookedBus =  BookedBus::where('schedule_id', $schedule)->where('route_id', $route)->where('date_departing', $date)->get();


        // if ($bookedBus->count() > 0) {
        // } else if ($bookedBus->count() == 0) {




        // //choose bus
        // $chooseBus = Bus::leftJoin('booked_buses', 'buses.id', 'booked_buses.bus_id')
        //     ->where('buses.condition', '!=', 'bad')
        //     ->whereNull('booked_buses.bus_id')
        //     ->inRandomOrder()
        //     ->select([
        //         'buses.id as id',
        //         'buses.seats as seats',
        //         'buses.condition as condition',
        //         'booked_buses.route_id as route_id',
        //         'booked_buses.schedule_id as schedule_id',
        //         'booked_buses.date_departing as date_departing',
        //     ])
        //     ->first();



        // if ($chooseBus != null) {

        //     $bookedBus = BookedBus::create([
        //         'date_departing' => $date,
        //         'schedule_id' => $schedule,
        //         'route_id' => $route,
        //         'bus_id' => $chooseBus->id
        //     ]);

        //     $chooseSeat = Seat::where('bus_id', '=', $chooseBus->id)->where('is_taken', false)->inRandomOrder()->first();

        //     Seat::find($chooseSeat->id)->update([
        //         'is_taken' => true,
        //     ]);


        //     $booking = Booking::create([
        //         'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
        //         'booked_bus_id' => $bookedBus->id,
        //         'seat_id' => $chooseSeat->id,
        //         'date_departing' => $date
        //     ]);


        // } else {
        //     // no bus available
        // }

        // // choose seat


    }

    public function changed()
    {

        //dd(Payment::find(4)->bookings);
        $faker = Faker::create();

        $customer = Customer::find(6);
        $customerId = $customer->id;
        $price = $faker->numberBetween(10000, 30000);
        $date = date('Y-m-d');
        $route = BusRoute::find(1);
        $route = $route->id;
        $schedule  = Schedule::find(1);
        $schedule = $schedule->id;


        $checkedifBusBooked = Bus::where('route_id', $route)->where('schedule_id', $schedule)->where('date_departing', $date)->get();

        if ($checkedifBusBooked->count() > 0) {

            // if buses found
            $bookedBusSeatChecker = new Collection;
            foreach ($checkedifBusBooked as $bookedBus) {

                //check if the buses are the same as the route and get the number of seats available
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




            if (!$bookedBusSeatChecker->isEmpty()) {

                // check if customer already has a booking session
                $count = 0;
                $booking = Booking::where('customer_id', $customerId)->where('is_completed', false)->get();

                if ($booking->count() > 0) {
                    $count++;
                }


                if ($count > 0) {
                    dd('customer has booking session already');
                } else {

                    function filterLargest($bus)
                    {

                        // get the bus that has the largest number of customers
                        $maxNumberofTakenSeats = $bus->max('taken_seats');
                        $theBus = $bus->where('taken_seats', $maxNumberofTakenSeats)->first();
                        return $theBus->id; // the id of the bus that has the largest number of customers booked
                    }



                    $busId =  filterLargest($bookedBusSeatChecker);
                    $bookingbusId = Bus::find($busId);
                    // book the customer
                    $chooseSeat = Seat::where('bus_id', '=', $busId)->where('is_taken', false)->inRandomOrder()->first();


                    Seat::find($chooseSeat->id)->update([
                        'is_taken' => true,
                    ]);


                    $booking = Booking::create([
                        'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                        'bus_id' => $busId, //he
                        'seat_id' => $chooseSeat->id,
                        'date_departing' => $date,
                        'customer_id' => $customerId

                    ]);


                    // after that update bus status if full or not

                    $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                        ->where('buses.id', $busId)
                        ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                        ->groupBy('buses.id')
                        ->orderBy('taken_seats', 'desc')
                        ->first();

                    if ($remainingSeats->remaining_seats == 0) {

                        Bus::find($busId)->update([
                            'is_full' => true,
                        ]);

                        //set full status


                    }
                }
            } else if ($bookedBusSeatChecker->isEmpty()) {


                // if no buses found on the booked buses

                $goodBus = Bus::where('condition', '!=', 'bad')->whereNull('route_id')->whereNull('schedule_id')->whereNull('date_departing')->inRandomOrder()->first();

                if ($goodBus === null) {
                    // if no bus available
                    dd('no bus available at the moment');
                } else {
                    // check if customer already has a booking session
                    $count = 0;
                    $booking = Booking::where('customer_id', $customerId)->where('is_completed', false)->get();

                    if ($booking->count() > 0) {
                        $count++;
                    }


                    if ($count > 0) {
                        dd('customer already has a booking session');
                    } else {
                        // allocate seat for the customer in the database
                        $busId = $goodBus->id;
                        $chooseSeat = Seat::where('bus_id', '=', $busId)->where('is_taken', false)->inRandomOrder()->first();


                        Seat::find($chooseSeat->id)->update([
                            'is_taken' => true,
                        ]);


                        $booking = Booking::create([
                            'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                            'bus_id' => $busId, //here
                            'seat_id' => $chooseSeat->id,
                            'date_departing' => $date,
                            'customer_id' => $customerId
                        ]);


                        $updateBus = Bus::find($busId)->update([
                            'date_departing' => $date,
                            'route_id' => $route,
                            'schedule_id' => $schedule
                        ]);


                        // after that update bus status if full or not

                        $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                            ->where('buses.id', $busId)
                            ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                            ->groupBy('buses.id')
                            ->orderBy('taken_seats', 'desc')
                            ->first();

                        if ($remainingSeats->remaining_seats == 0) {

                            Bus::find($busId)->update([
                                'is_full' => true,
                            ]);

                            //set full status


                        }
                    }
                }
            }
        } else if ($checkedifBusBooked->count() == 0) {

            // if no buses found

            $goodBus = Bus::where('condition', '!=', 'bad')->whereNull('route_id')->whereNull('schedule_id')->whereNull('date_departing')->inRandomOrder()->first();

            if ($goodBus === null) {
                // if no bus available
                dd('no bus available at the moment');
            } else {
                // check if customer already has a booking session
                $count = 0;
                $booking = Booking::where('customer_id', $customerId)->where('is_completed', false)->get();

                if ($booking->count() > 0) {
                    $count++;
                }


                if ($count > 0) {
                    dd('customer already has a booking session');
                } else {
                    // allocate seat for the customer in the database
                    $busId = $goodBus->id;
                    $chooseSeat = Seat::where('bus_id', '=', $busId)->where('is_taken', false)->inRandomOrder()->first();


                    Seat::find($chooseSeat->id)->update([
                        'is_taken' => true,
                    ]);


                    $booking = Booking::create([
                        'payment_id' => Payment::inRandomOrder()->pluck('id')->first(),
                        'bus_id' => $busId, //here
                        'seat_id' => $chooseSeat->id,
                        'date_departing' => $date,
                        'customer_id' => $customerId,
                    ]);


                    $updateBus = Bus::find($busId)->update([
                        'date_departing' => $date,
                        'route_id' => $route,
                        'schedule_id' => $schedule
                    ]);


                    // after that update bus status if full or not

                    $remainingSeats =   Bus::join('seats', 'buses.id', '=', 'seats.bus_id')
                        ->where('buses.id', $busId)
                        ->select('buses.id',  DB::raw('COUNT(seats.id) as seat_count'), DB::raw('SUM(CASE WHEN seats.is_taken = 1 THEN 1 ELSE 0 END) as taken_seats'), DB::raw('SUM(CASE WHEN seats.is_taken = 0 THEN 1 ELSE 0 END) as remaining_seats'))
                        ->groupBy('buses.id')
                        ->orderBy('taken_seats', 'desc')
                        ->first();

                    if ($remainingSeats->remaining_seats == 0) {

                        Bus::find($busId)->update([
                            'is_full' => true,
                        ]);

                        //set full status


                    }
                }
            }
        }
    }
}
