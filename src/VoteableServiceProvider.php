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
        $migrationFrom = __DIR__.'/../database/migrations/create_votes_table.php';
        $migrationTo = database_path('/migrations/'.date('Y_m_d_His', time()).'_create_votes_table.php');

        $this->publishes([$migrationFrom => $migrationTo], 'migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
