<?php

/** @var Nutgram $bot */

use App\Telegram\Commands\OnMessageCommand;
use App\Telegram\Commands\OnEditedMessageCommand;
use App\Telegram\Commands\StartCommand;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Webhook;
use SergiX44\Nutgram\Telegram\Attributes\MessageTypes;

/* running webhook mode */
//$bot->setRunningMode(Webhook::class);

$bot->onCommand('start', StartCommand::class)
    ->description('The start command!');

$bot->onMessage(callable: OnMessageCommand::class);

$bot->onEditedMessage(callable: OnEditedMessageCommand::class);

$bot->registerMyCommands();
$bot->run();