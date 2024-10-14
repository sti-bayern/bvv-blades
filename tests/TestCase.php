<?php

namespace Sti\BvvBlades\Tests;

use Sti\BvvBlades\BvvBladesServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use InteractsWithViews;
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            BvvBladesServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
