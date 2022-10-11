<?php

namespace Sqits\Babelfish\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'babelfish:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the Babelfish resources';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->comment('Publishing Babelfish Assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'babelfish-assets']);

        $this->comment('Publishing Babelfish Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'babelfish-config']);
    }
}
