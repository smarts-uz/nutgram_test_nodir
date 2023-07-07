<?php

namespace App\Telegram\Conversations;

use Psr\SimpleCache\InvalidArgumentException;
use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class MyConversation extends Conversation
{
    public const secondStep = 'secondStep';

    protected ?string $step = 'conversation';
    public function conversation(Nutgram $bot): void
    {
        $bot->sendMessage($this->getMessage());
        $this->next(step: self::secondStep);
    }

    public function secondStep(Nutgram $bot): void
    {
        $bot->sendMessage($this->getSecondStepMessage());
        $this->end();
    }

    public function getMessage(): string
    {
        return 'This is the first step!';
    }

    public function getSecondStepMessage(): string
    {
        return 'Bye!';
    }
}