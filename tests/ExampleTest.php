<?php

namespace JaberWiki\CoreComponentRepository\Tests;

use Orchestra\Testbench\TestCase;
use JaberWiki\CoreComponentRepository\CoreComponentRepositoryServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CoreComponentRepositoryServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
