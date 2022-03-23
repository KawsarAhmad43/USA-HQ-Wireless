<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use DB;
use App\Basic;
use View;

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
        Schema::defaultStringLength(191);
        View::composer('*', function ($view) {
            $basic = Basic::find(1);
            $view->with('basic', $basic);
        });

        DB::listen(function ($query) {
            if (preg_match('/^select/', $query->sql)) {
               // Log::info('sql: ' .  $query->sql);
                // Also available are $query->bindings and $query->time.
            }
        });
    }
}
