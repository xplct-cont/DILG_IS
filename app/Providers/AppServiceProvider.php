<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(125);
        Paginator::useBootstrap();
        Livewire::component('normal.legalopinions.index', \App\Http\Livewire\Normal\LegalOpinions\Index::class);
        Livewire::component('normal.issuances.index', \App\Http\Livewire\Normal\Issuances\Index::class);
        Livewire::component('normal.faqs.index', \App\Http\Livewire\Normal\Faqs\Index::class);
        Livewire::component('normal.charter.index', \App\Http\Livewire\Normal\Charter\Index::class);
        Livewire::component('normal.field-officers.index', \App\Http\Livewire\Normal\FieldOfficers\Index::class);
        Livewire::component('normal.jobs.index', \App\Http\Livewire\Normal\Jobs\Index::class);
    }
}
