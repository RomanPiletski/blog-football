<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\Admin\UserObserver;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrapFour();
    }
}
