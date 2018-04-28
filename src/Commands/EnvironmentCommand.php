<?php

namespace Damascene\Commands;

use Illuminate\Console\Command;

class EnvironmentCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display the current framework environment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line(
            sprintf(
                '<info>Current application environment:</info> <comment>%s</comment>',
                $this->laravel['config']->get('app.env', 'production')
            )
        );
    }
}
