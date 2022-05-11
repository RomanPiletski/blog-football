<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;

class Coordinate implements CoordinateModelContract
{
    private $cityName;
    private $lon;
    private $lat;


    public function __construct(object $coords)
    {
        $this->cityName = $coords->name;
        $this->lat = $coords->coord->lat;
        $this->lon = $coords->coord->lon;
    }

    public function getCityName(): string|null
    {
        return $this->cityName;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }
}
