<?php

namespace App\Telegram\AnswerCallbackQuerys;

use SergiX44\Nutgram\Nutgram;

class Back
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage(text: 'Back query');
    }
}