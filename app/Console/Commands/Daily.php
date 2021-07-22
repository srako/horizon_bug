<?php

namespace App\Console\Commands;

use App\Jobs\Bytedance;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Bus;

class Daily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily';

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
        Bus::batch([
            new Bytedance(1),
            new Bytedance(2),
            new Bytedance(3),
            new Bytedance(4),
        ])->name('bytedance daily')->dispatch();
    }
}
