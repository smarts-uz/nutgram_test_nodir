<?php

namespace App\Telegram\Keyboards\MyKeyboards;

use App\Telegram\Keyboards\Vehicle;
use SergiX44\Nutgram\Telegram\Types\BaseType;

class TestKeyboard extends Vehicle
{
    public function __construct(BaseType $keyboardButton)
    {
        parent::__construct($keyboardButton);
    }
}