<?php

namespace DanieleBuso\LaravelShortener\Tests;

use Orchestra\Testbench\TestCase;
use DanieleBuso\LaravelShortener\LaravelShortenerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelShortenerServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
