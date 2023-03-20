<?php

namespace BubbaOps\MacroCollection\Commands;

use Illuminate\Console\Command;

class MacroCollectionCommand extends Command
{
    public $signature = 'macro-collection';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
