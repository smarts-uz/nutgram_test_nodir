<?php

namespace App\Telegram\Keyboards;

use SergiX44\Nutgram\Telegram\Types\BaseType;

readonly class Buttons
{
    public function __construct(private BaseType $keyboardButton) {}

    public function help(): BaseType
    {
        return $this->execute(text: 'Help', callback_data: 'help');
    }

    public function myBots(): BaseType
    {
        return $this->execute(text: 'My Bots', callback_data: 'myBots');
    }

    public function back(): BaseType
    {
        return $this->execute(text: '« Back', callback_data: 'back');
    }

    private function execute($text, $callback_data): BaseType
    {
        return $this->keyboardButton::make($text, callback_data: $callback_data);
    }
}