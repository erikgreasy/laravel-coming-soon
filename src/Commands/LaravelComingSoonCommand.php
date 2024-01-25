<?php

namespace Erikgreasy\LaravelComingSoon\Commands;

use Illuminate\Console\Command;

class LaravelComingSoonCommand extends Command
{
    public $signature = 'laravel-coming-soon';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
