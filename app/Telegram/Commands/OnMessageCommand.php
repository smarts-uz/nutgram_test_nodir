<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;

class OnMessageCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage($this->getMessage(). $bot->message()->text);
    }

    public function getMessage(): string
    {
        return 'Your message: ';
    }
}