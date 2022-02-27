<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitializeParameter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:init_param';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->info('start');
        $this->calculator();
        $this->info('end');
    }

    private function calculator()
    {
        $testDataJson = $this->testDataJson();
        file_get_contents(json_decode($testDataJson));
    }
}
