<?php

namespace App\Telegram\Commands;

use App\Telegram\Keyboards\Director;
use App\Telegram\Keyboards\MyKeyboards\TestKeyboardBuilder;
use SergiX44\Nutgram\Nutgram;

class Test
{
    public function __invoke(Nutgram $bot): void
    {
        $newVehicle = (new Director())->build(new TestKeyboardBuilder());
        $bot->sendMessage(text: $this->getMessage(), reply_markup: $newVehicle->getBaseType());
    }

    private function getMessage(): string
    {
        return "Test Keyboard";
    }
}