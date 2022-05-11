<?php

namespace App\Services\Weather\Interfaces\Models;

interface TemperatureModelContract
{
    public function getCurrentTemperature(): float|null;

    public function getFeelsLikeTemperature(): float|null;

    public function getHumidity(): int|null;

    public function getPressure(): int|null;
}
