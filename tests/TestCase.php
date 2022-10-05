<?php

namespace AjCastro\EagerLoadPivotRelations\Tests;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use InteractsWithDatabase;

    protected function getPackageProviders($app): void
    {
    }

    protected function getEnvironmentSetUp($app): void
    {
        ( new \CreateUsersTable )->up();
        ( new \CreatePasswordResetsTable )->up();
        ( new \CreateBrandsTable )->up();
        ( new \CreateCarsTable )->up();
        ( new \CreateColorsTable )->up();
        ( new \CreateCarUserTable )->up();
        ( new \CreateTiresTable )->up();
    }
}