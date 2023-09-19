<?php

namespace App\Console\Commands;

use App\Models\Scheduler;
use Illuminate\Console\Command;

class testScheduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-scheduler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing scheduler';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //

        Scheduler::create([
            'status' => 'running',
        ]);
    }
}