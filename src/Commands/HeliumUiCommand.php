<?php

namespace Webup\HeliumUi\Commands;

use Illuminate\Console\Command;

class HeliumUiCommand extends Command
{
    public $signature = 'helium-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
