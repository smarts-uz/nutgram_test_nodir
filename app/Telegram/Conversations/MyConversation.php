<?php

namespace App\Telegram\Conversations;

use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class MyConversation extends Conversation
{
    public const SECOND_STEP = 'secondStep';

    protected ?string $step = 'conversation';
    public function conversation(Nutgram $bot): void
    {
        $bot->sendMessage($this->getMessage());
        $this->next(step: self::SECOND_STEP);
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