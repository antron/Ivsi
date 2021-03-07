<?php

/**
 * Dump.
 */

namespace Antron\Ivsi\Commands;

use Illuminate\Console\Command;

class IvsiDump extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ivsi:dump {method=option}';

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
        switch ($this->argument('method')) {
            case 'sudo':
                return \Antron\Ivsi\Ivsi::dump(true);
            default :
                return \Antron\Ivsi\Ivsi::dump();
        }


        return 0;
    }

}
