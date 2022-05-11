<?php

namespace App\Services\Weather\Interfaces\Models;

interface CoordinateModelContract
{
    public function getCityName(): string|null;

    public function getLon(): float|null;

    public function getLat(): float|null;
}
