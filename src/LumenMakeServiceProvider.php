<?php

namespace Damascene\LumenMake;

use Illuminate\Support\ServiceProvider;
use Damascene\LumenMake\Commands\JobMakeCommand;
use Damascene\LumenMake\Commands\MailMakeCommand;
use Damascene\LumenMake\Commands\TestMakeCommand;
use Damascene\LumenMake\Commands\EventMakeCommand;
use Damascene\LumenMake\Commands\ModelMakeCommand;
use Damascene\LumenMake\Commands\ConsoleMakeCommand;
use Damascene\LumenMake\Commands\EnvironmentCommand;
use Damascene\LumenMake\Commands\KeyGenerateCommand;
use Damascene\LumenMake\Commands\ListenerMakeCommand;
use Damascene\LumenMake\Commands\ProviderMakeCommand;
use Damascene\LumenMake\Commands\ResourceMakeCommand;
use Damascene\LumenMake\Commands\ControllerMakeCommand;
use Damascene\LumenMake\Commands\MiddlewareMakeCommand;
use Damascene\LumenMake\Commands\NotificationMakeCommand;

class LumenMakeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->commands([
                ConsoleMakeCommand::class,
                ControllerMakeCommand::class,
                EnvironmentCommand::class,
                EventMakeCommand::class,
                JobMakeCommand::class,
                KeyGenerateCommand::class,
                ListenerMakeCommand::class,
                MailMakeCommand::class,
                MiddlewareMakeCommand::class,
                ModelMakeCommand::class,
                NotificationMakeCommand::class,
                ProviderMakeCommand::class,
                ResourceMakeCommand::class,
                TestMakeCommand::class,
            ]);
    }
}
