<?php

namespace Salvatori\AlmaRTCPackage\Console;

use Roots\Acorn\Console\Commands\Command;
use Salvatori\AlmaRTCPackage\Facades\AlmaRTC;

class AlmaRTCCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alma-rtc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My custom Acorn command.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info(
            AlmaRTC::getQuote()
        );
    }
}
