<?php

/** @var Nutgram $bot */

use App\Telegram\AnswerCallbackQuerys\Help as HelpQuery;
use App\Telegram\Commands\Help;
use App\Telegram\Commands\OnMessage;
use App\Telegram\Commands\OnEditedMessage;
use App\Telegram\Commands\Start;
use App\Telegram\Conversations\MyConversation;
use App\Telegram\Middleware\SendMessage;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Webhook;
use SergiX44\Nutgram\Telegram\Attributes\MessageTypes;
use SergiX44\Nutgram\Telegram\Types\Command\BotCommandScopeAllPrivateChats;

/* running webhook mode */
//$bot->setRunningMode(Webhook::class);

$bot->onCommand(command: 'start', callable: Start::class)
    ->description(description: 'The start command!')
    ->middleware(callable: SendMessage::class);

$bot->onCommand(command: 'help', callable: Help::class)
    ->description(description: 'The addbot command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCommand('conversation', MyConversation::class);

$bot->onCallbackQueryData(pattern: 'help', callable: HelpQuery::class);

$bot->onMessage(callable: OnMessage::class);

$bot->onEditedMessage(callable: OnEditedMessage::class);

$bot->registerMyCommands();
$bot->run();