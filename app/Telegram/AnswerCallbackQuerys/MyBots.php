<?php

namespace App\Telegram\AnswerCallbackQuerys;

use SergiX44\Nutgram\Nutgram;

class MyBots
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->message()->delete();
        $bot->sendMessage(text: 'My bot query');
    }
}