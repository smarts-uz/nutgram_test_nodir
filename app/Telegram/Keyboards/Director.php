<?php

namespace App\Telegram\Keyboards;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addButton();

        return $builder->getVehicle();
    }
}