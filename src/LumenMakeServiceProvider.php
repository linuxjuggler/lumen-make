<?php

namespace Damascene\Commands;

use Illuminate\Support\ServiceProvider;

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
