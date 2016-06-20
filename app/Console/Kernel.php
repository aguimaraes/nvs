<?php

namespace App\Console;

use App\Console\Commands\UpdateCurrencies;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\UpdateStockSymbols;
use App\Console\Commands\LatestExchangeRates;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        UpdateCurrencies::class,
        LatestExchangeRates::class,
        UpdateStockSymbols::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }
}
