<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;

class StartCommand
{
    public function __invoke(Nutgram $bot): void
    {
//        $addBotKeyboard = (new Director())->build(new StartKeyboardBuilder());
        $bot->sendMessage(text: $this->getMessage()/*, reply_markup: $addBotKeyboard->getBaseType()*/);
    }

    public function getMessage(): string
    {
        return 'Livegram Bot is a builder of feedback bots for Telegram. Read more about it.';
    }
}