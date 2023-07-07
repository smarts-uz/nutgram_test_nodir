<?php

/** @var Nutgram $bot */

use App\Telegram\AnswerCallbackQuerys\Help as HelpQuery;
use App\Telegram\AnswerCallbackQuerys\MyBots as MyBotsQuery;
use App\Telegram\AnswerCallbackQuerys\Test as TestQuery;
use App\Telegram\AnswerCallbackQuerys\Back as BackQuery;
use App\Telegram\Commands\Help;
use App\Telegram\Commands\OnMessage;
use App\Telegram\Commands\OnEditedMessage;
use App\Telegram\Commands\Start;
use App\Telegram\Commands\Test;
use App\Telegram\Conversations\MyConversation;
use App\Telegram\Middleware\SendMessage;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Webhook;
use SergiX44\Nutgram\Telegram\Types\Command\BotCommandScopeAllPrivateChats;

/* running webhook mode */
//$bot->setRunningMode(Webhook::class);

$bot->onCommand(command: 'start', callable: Start::class)
    ->description(description: 'The start command!')
    ->middleware(callable: SendMessage::class);

$bot->onCommand(command: 'help', callable: Help::class)
    ->description(description: 'The addbot command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCommand(command: 'test', callable: Test::class)
    ->description(description: 'The test command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCommand(command: 'conversation', callable: MyConversation::class)
    ->description(description: 'The conversation command!')
    ->scope(new BotCommandScopeAllPrivateChats);

$bot->onCallbackQueryData(pattern: 'help', callable: HelpQuery::class);
$bot->onCallbackQueryData(pattern: 'myBots', callable: MyBotsQuery::class);
$bot->onCallbackQueryData(pattern: 'back', callable: BackQuery::class);
$bot->onCallbackQueryData(pattern: 'test', callable: TestQuery::class);

$bot->onMessage(callable: OnMessage::class);

$bot->onEditedMessage(callable: OnEditedMessage::class);

$bot->registerMyCommands();
$bot->run();