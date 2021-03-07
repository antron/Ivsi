<?php

/**
 * Restore.
 */

namespace Antron\Ivsi\Commands;

use Illuminate\Console\Command;

class IvsiRestore extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ivsi:restore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restore';

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
        \Antron\Ivsi\Ivsi::restore();

        return 0;
    }

}
