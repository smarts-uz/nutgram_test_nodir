<?php

namespace App\Telegram\Commands;

use App\Telegram\Keyboards\Director;
use App\Telegram\Keyboards\MyKeyboards\HelpKeyboardBuilder;
use SergiX44\Nutgram\Nutgram;

class Help
{
    public function __invoke(Nutgram $bot): void
    {
        $newVehicle = (new Director())->build(new HelpKeyboardBuilder());
        $bot->sendMessage(text: $this->getMessage(), reply_markup: $newVehicle->getBaseType());
    }

    private function getMessage(): string
    {
        return "To connect a bot, you should follow these two steps:

1. Open @BotFather and create a new bot (http://telegra.ph/Create-Bot-Livegram-FAQ-03-29).
2. You'll get a token (e.g. 12345:6789ABCDEF) — just forward or copy-paste it to this chat.

    Warning! Don't connect bots already used by other services like Chatfuel, Manybot, ect.";
    }
}