<?php

use Symfony\Component\Console\Command\Command;
use Uteq\LaravelInnaxApi\Commands\LaravelInnaxApiCommand;
use function Pest\Laravel\artisan;

it('can test', function () {
    dd(config('database'));
    artisan(LaravelInnaxApiCommand::class)
        ->assertExitCode(Command::SUCCESS);
});
