<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test_cmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test_cmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试command';

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
     * @return mixed
     */
    public function handle()
    {
        //
        echo "test cmd \n";
    }
}
