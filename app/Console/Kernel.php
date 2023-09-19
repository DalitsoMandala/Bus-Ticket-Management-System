<?php

namespace App\Console;

use App\Models\Scheduler;
use Spatie\ShortSchedule\ShortSchedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // Run the task every 5 seconds after a user logs in
        $schedule->command('app:bus-departure')->everyMinute()->sendOutputTo(storage_path('logs/bus-update.log'));
        $schedule->command('app:customer-bus-departure')->everyMinute()->sendOutputTo(storage_path('logs/bus-update2.log'));
    }

    protected function shortSchedule(ShortSchedule $shortSchedule)
    {
        // this artisan command will run every second

        //  $shortSchedule->command('app:customer-bus-departure')->everySecond();
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
