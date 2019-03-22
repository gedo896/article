<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin-only', function ($user) {
            if(Auth::user()->type === 'admin')
            {
                return true;
            }
            return false;
        });

        Gate::define('user-only', function ($user) {
            if(Auth::check())
            {
                return true;
            }
            return false;
        });
    }
}
