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
//        // temporary for development
//        $target = __DIR__ . '/../../public';
//        $link = public_path('/vendor/babelfish');
//        $this->laravel->make('files')->link($target, $link);

//        $this->comment('Publishing Babelfish Assets...');
//        $this->callSilent('vendor:publish', ['--tag' => 'babelfish-assets', '--force' => true]);

        $this->comment('Publishing Babelfish Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'babelfish-config']);

        $this->comment('Publishing Babelfish Migrations...');
        $this->callSilent('vendor:publish', ['--tag' => 'babelfish-migrations']);
    }
}
