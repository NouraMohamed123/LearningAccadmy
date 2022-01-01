<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Cat;
use App\Setting;

class ViewServicesProviders2 extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        view()->composer('Front.inc.header',function($view)
        {
            $view->with('cats',Cat::get());

            $view->with('Settings',Setting::get()->first());

        });

        view()->composer('Front.inc.footer',function($view)
        {
            $view->with('Settings',Setting::get()->first());

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
