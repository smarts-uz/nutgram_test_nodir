<?php

namespace App\Telegram\Keyboards;

interface Builder
{
    public function addButton(): void;

    public function getVehicle(): Vehicle;

    public function createVehicle(): void;
}
