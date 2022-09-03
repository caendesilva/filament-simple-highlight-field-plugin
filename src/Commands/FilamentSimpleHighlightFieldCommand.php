<?php

namespace Desilva\FilamentSimpleHighlightField\Commands;

use Illuminate\Console\Command;

class FilamentSimpleHighlightFieldCommand extends Command
{
    public $signature = 'filament-simple-highlight-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
