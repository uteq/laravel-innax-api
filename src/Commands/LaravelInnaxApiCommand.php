<?php

namespace Uteq\LaravelInnaxApi\Commands;

use Illuminate\Console\Command;

class LaravelInnaxApiCommand extends Command
{
    public $signature = 'laravel-innax-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
