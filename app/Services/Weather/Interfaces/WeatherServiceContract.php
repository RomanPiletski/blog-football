<?php

namespace App\Services\Weather\Interfaces;

use App\Services\Weather\Interfaces\Models\CloudinessModelContract;
use App\Services\Weather\Interfaces\Models\CoordinateModelContract;
use App\Services\Weather\Interfaces\Models\TemperatureModelContract;


interface WeatherServiceContract
{
//    function responce(): object;

    public function cloudiness(): CloudinessModelContract;

    public function temperature(): TemperatureModelContract;

    public function coordinates(): CoordinateModelContract;


}
