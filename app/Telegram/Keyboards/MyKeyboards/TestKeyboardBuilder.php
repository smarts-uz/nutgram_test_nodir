<?php

namespace App\Telegram\Keyboards\MyKeyboards;

use App\Telegram\Keyboards\Builder;
use App\Telegram\Keyboards\Buttons;
use App\Telegram\Keyboards\Vehicle;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class TestKeyboardBuilder implements Builder
{
    private HelpKeyboard $inlineKeyboard;

    public function addButton(): void
    {
        $button = new Buttons(keyboardButton: new InlineKeyboardButton(text: ''));
        $this->inlineKeyboard->setPart($button->help(), $button->test());
        $this->inlineKeyboard->setPart($button->back());
    }

    public function createVehicle(): void
    {
        $this->inlineKeyboard = new HelpKeyboard(new InlineKeyboardMarkup());
    }

    public function getVehicle(): Vehicle
    {
        return $this->inlineKeyboard;
    }
}