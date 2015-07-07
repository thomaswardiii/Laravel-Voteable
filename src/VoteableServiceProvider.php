<?php

namespace DraperStudio\Voteable;

use Illuminate\Support\ServiceProvider;

/**
 * Class VoteableServiceProvider.
 */
class VoteableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
