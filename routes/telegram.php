<?php

/** @var Nutgram $bot */

use App\Telegram\Commands\OnMessage;
use App\Telegram\Commands\OnEditedMessage;
use App\Telegram\Commands\Start;
use App\Telegram\Middleware\SendMessage;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Webhook;
use SergiX44\Nutgram\Telegram\Attributes\MessageTypes;

/* running webhook mode */
//$bot->setRunningMode(Webhook::class);

$bot->onCommand('start', Start::class)
    ->description('The start command!')
    ->middleware(callable: SendMessage::class);

$bot->onMessage(callable: OnMessage::class);

$bot->onEditedMessage(callable: OnEditedMessage::class);

$bot->registerMyCommands();
$bot->run();