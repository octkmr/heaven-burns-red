<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
        $this->info('start');
        $json = $this->generate();
        file_put_contents(config('json.path') . 'parameter.json', $json);
        $this->info('end');
    }

    private function generate()
    {
        $opt = JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT;
        return json_encode([
            'lv' => 83,
            'dp' => 1177,
            'hp' => 1006,
            'pwr' => 93,
            'dex' => 91,
            'def' => 94,
            'ref' => 93,
            'int' => 89,
            'lck' => 89,
        ], $opt);
    }
}
