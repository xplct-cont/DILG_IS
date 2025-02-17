<?php

namespace App\Console;
use App\Services\ScraperService;
use App\Services\DraftIssuanceService;
use App\Services\LegalOpinionService;
use App\Services\PresidentialDirectiveService;
use App\Services\RepublicActService;
use Illuminate\Console\Scheduling\Schedule;
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
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function () {
        //     $scraperService = app(\App\Services\ScraperService::class);
        //     $url = 'https://dilg.gov.ph/legal-opinions-archive/';
        //     $scraperService->scrapeLegalOpinions($url);
        // })->hourly(); // Adjust the frequency as needed

        //Legal Opinions 
        $schedule->call(function () {
            // Scrape Legal Opinions
            $scraperService = app(ScraperService::class);
            $scraperService->scrapeLegalOpinions('https://dilg.gov.ph/legal-opinions-archive/');
        
            // Transfer Legal Opinions Record
            $sendLegalOpinions = app(LegalOpinionService::class);
            $sendLegalOpinions->sendAllLegalOpinionsToTangkaraw();
        
            // Scrape Republic Acts
            $republicactService = app(RepublicActService::class);
            $republicactService->scrapeRepublicacts('https://dilg.gov.ph/issuances-archive/ra/');
        
            // Scrape Presidential Directives
            $presidentialdirectiveService = app(PresidentialDirectiveService::class);
            $presidentialdirectiveService->scrapePresidentialdirectives('https://dilg.gov.ph/issuances-archive/pd/');
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
