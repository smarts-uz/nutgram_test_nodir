<?php

/** @var Nutgram $bot */

use App\Telegram\Commands\StartCommand;
use SergiX44\Nutgram\Nutgram;

$bot->onCommand('start', StartCommand::class)
    ->description('The start command!');

$bot->registerMyCommands();
$bot->run();