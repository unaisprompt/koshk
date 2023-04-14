<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Http;

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
        // $url = config('global.api')."/categoryWithSubcategory";
        // $response = Http::post($url,  [
        //  ]);
       //  dd($response['category']);
        // view()->share('menus', $response['category']);
    }
}
