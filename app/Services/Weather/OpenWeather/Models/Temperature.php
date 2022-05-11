<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\TemperatureModelContract;

class Temperature implements TemperatureModelContract
{
    /**
     * Текущая температура
     * @var float
     */
    private float $temp;

    /**
     * Ощущается как
     * @var float
     */
    private float $feels_like;

    /**
     * Влажность в процентах
     * @var int
     */
    private int $humidity;

    /**
     * Давление
     * @var int
     */
    private int $pressure;


    public function __construct(object $data)
    {
        $this->temp = $data->main->temp;
        $this->feels_like = $data->main->feels_like;
        $this->humidity = $data->main->humidity;
        $this->pressure = $data->main->pressure;
    }

    public function getCurrentTemperature(): float
    {
        return $this->temp;
    }

    public function getFeelsLikeTemperature(): float
    {
        return $this->feels_like;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getPressure(): int
    {
        return $this->pressure;
    }
}
