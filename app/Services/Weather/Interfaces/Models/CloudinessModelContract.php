<?php

namespace App\Services\Weather\Interfaces\Models;

interface CloudinessModelContract
{
    public function getIcon(): string|null;

    public function getDescription(): string|null;
}
