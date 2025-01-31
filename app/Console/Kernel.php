<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Services\ScraperService;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected function schedule(Schedule $schedule)
    {
     
        $schedule->call(function () {
            $scraperService = app(ScraperService::class);
            $url = 'https://dilg.gov.ph/legal-opinions-archive/';
            $scraperService->scrapeLegalOpinions($url);
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
