<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Payment;
use App\Notifications\Reminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class customerBusDeparture extends Command
{

    public $bookings;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:customer-bus-departure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Customer\'s bus departure ';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        Log::info('CustpomerbusDeparture command started');
        $users = User::where('logged_in', true)->get();


        foreach ($users as $user) {
            # code...

            $currentUser = User::find($user->id);
            $userRole = $currentUser->getRoleNames()->first();
            if ($userRole == 'customer') {


                $customer = User::find($user->id)->customers->first(); // Assuming the user is authenticated
                $booking  = Booking::where('customer_id', $customer->id)->get();


                if ($booking->count() > 0) {


                    foreach ($booking as $key => $book) {


                        $getDepartDate = Payment::find($book->payment_id)->customer_data['journey_date'];
                        $getDepartTime = Payment::find($book->payment_id)->customer_data['journey_time'];
                        $desc =  Payment::find($book->payment_id)->customer_data['description'];
                        $targetDate = Carbon::parse($getDepartDate . ' ' . $getDepartTime);
                        $currentDateTime = Carbon::now();



                        // $dayDifference = $currentDateTime->diffInDays($targetDate);
                        // $hourDifference = $currentDateTime->diffInHours($targetDate);
                        // $minutesDifference = $currentDateTime->diffInMinutes($targetDate);
                        // $secondsDifference = $currentDateTime->diffInSeconds($targetDate);
                        $diff = $currentDateTime->diff($targetDate);

                        $days = $diff->days;
                        $hours = $diff->h;
                        $minutes = $diff->i;
                        $seconds = $diff->s;

                        if ($currentDateTime >= $targetDate) {

                            if ($book->is_notified != 1 && $book->is_completed != 1) {

                                $user = User::find($user->id);
                                $title = 'Bus Departure';
                                $description = 'Your bus has departed! ';
                                $link = route('customer-bookings');
                                $user->notify(new Reminder($title, $description, $link));
                                $find = Booking::find($book->id);

                                if ($find->is_notified == false) {

                                    Booking::find($book->id)->update([
                                        'is_notified' => true,
                                        'is_completed' => true
                                    ]);
                                }
                            }

                            //   dd($days . ' ' . $hours . ' ' . $minutes . ' ' . $seconds);
                            // Set invert property to get a negative difference
                        } else {

                            //dd($days . ' ' . $hours . ' ' . $minutes . ' ' . $seconds);
                            if ($days == 0 && $hours == 0 && $minutes == 30 && $seconds == 0) {
                                $user = User::find($user->id);
                                $title = 'Bus Departure';
                                $description = 'Your bus will leave in 30 minutes! You have a ' . $desc;
                                $link = route('customer-bookings');
                                $user->notify(new Reminder($title, $description, $link));
                            }

                            if ($days == 0 && $hours == 0 && $minutes == 10 && $seconds == 0) {
                                $user = User::find($user->id);
                                $title = 'Bus Departure';
                                $description = 'Your bus will leave in 10 minutes! You have a ' . $desc;
                                $link = route('customer-bookings');
                                $user->notify(new Reminder($title, $description, $link));
                            }

                            if ($days == 0 && $hours == 0 && $minutes == 5 && $seconds == 0) {
                                $user = User::find($user->id);
                                $title = 'Bus Departure';
                                $description = 'Your bus will leave in 5 minutes! You have a ' . $desc;
                                $link = route('customer-bookings');
                                $user->notify(new Reminder($title, $description, $link));
                            }

                            // if ($days == 0 && $hours == 0 && $minutes == 0 && $seconds == 2) {

                            //     $user = User::find($user->id);
                            //     $title = 'Bus Departure';
                            //     $description = 'Your bus has departed! ';
                            //     $link = route('customer-bookings');
                            //     $user->notify(new Reminder($title, $description, $link));
                            //     $find = Booking::find($book->id);

                            //     if ($find->is_notified == false) {

                            //         Booking::find($$book->id)->update([
                            //             'is_notified' => true,
                            //             'is_completed' => true
                            //         ]);
                            //     }
                            // }
                        }
                    }
                }
            }
        }

        Log::info('CustpomerbusDeparture command finished');
    }
}
