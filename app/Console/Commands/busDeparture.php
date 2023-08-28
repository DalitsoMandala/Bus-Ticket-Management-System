<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Schedule;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class busDeparture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bus-departure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if bus has departed';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        Log::info('busDeparture command started');

        // Rest of your task logic



        $buses = Bus::where('date_departing', '!=', null)->get();

        if ($buses->count() > 0) {

            foreach ($buses as $bus) {
                # code...
                $todayDate = Carbon::now();
                $time = Schedule::find($bus->schedule_id)->depart_time;
                $date_depart = $bus->date_departing;
                $fullDate = $date_depart . ' ' . $time;

                $ifDatePassed = Carbon::parse($fullDate);
                if ($ifDatePassed->isPast()) {
                    Bus::find($bus->id)->update([
                        'schedule_id' => null,
                        'route_id' => null,
                        'date_departing' => null,
                        'is_full' => false
                    ]);
                }
            }
        }

        Log::info('busDeparture command finished');
    }
}
