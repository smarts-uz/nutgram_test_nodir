<?php

namespace App\Telegram\Middleware;

use SergiX44\Nutgram\Nutgram;

class SendMessage
{
    public function __invoke(Nutgram $bot, $next): void
    {
        $bot->sendMessage(text: 'Welcome to Middleware');

        $next($bot);
    }
}