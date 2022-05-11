<?php

namespace App\Providers;

use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(WeatherServiceContract::class, function ($app){
            return new OpenWeatherService();
        });
    }

    public function boot()
    {
        //
    }
}
