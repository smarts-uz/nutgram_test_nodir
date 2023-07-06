<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;

class OnEditedMessageCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage($this->getMessage() . $bot->message()->text);
    }

    private function getMessage(): string
    {
        return 'Your message Edit: ';
    }
}