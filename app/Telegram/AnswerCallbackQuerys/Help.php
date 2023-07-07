<?php

namespace App\Telegram\AnswerCallbackQuerys;

use SergiX44\Nutgram\Nutgram;

class Help
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage(text: 'Help query');
    }
}