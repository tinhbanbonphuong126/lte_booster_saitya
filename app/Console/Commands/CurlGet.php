<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CurlGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'curl:admin {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get HTML Content By Curl';

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
        shell_exec('curl --cookie cookies.txt "http://localhost:8080/admin/'. $this->argument('table') . '" -o public/html/index.html');
    }
}