<?php

namespace App\Telegram\Conversations;

use Psr\SimpleCache\InvalidArgumentException;
use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class MyConversation extends Conversation
{
    public function conversation(Nutgram $bot)
    {
        $bot->sendMessage('This is the first step!');
        $this->next('secondStep');
    }

    public function secondStep(Nutgram $bot): void
    {
        $bot->sendMessage('Bye!');
        $this->end();
    }
}