<?php

use function Pest\Laravel\artisan;
use Symfony\Component\Console\Command\Command;
use Uteq\LaravelInnaxApi\Commands\LaravelInnaxApiCommand;

it('can test', function () {
    dd(config('database'));
    artisan(LaravelInnaxApiCommand::class)
        ->assertExitCode(Command::SUCCESS);
});
