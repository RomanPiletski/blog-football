<?php

namespace App\Services\Weather\OpenWeather\Models;



use App\Services\Weather\Interfaces\Models\CloudinessModelContract;

class Cloudiness implements CloudinessModelContract
{
    private $icon;
    private $description;

    public function __construct(object $data)
    {
        $this->icon = $data->weather[0]->icon;
        $this->description = $data->weather[0]->description;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
