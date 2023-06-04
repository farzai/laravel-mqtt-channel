<?php

namespace Farzai\MqttBroadcastChannel\Tests;

use Farzai\MqttBroadcastChannel\MqttBroadcastChannelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        //
    }

    protected function getPackageProviders($app)
    {
        return [
            MqttBroadcastChannelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-mqtt-channel_table.php.stub';
        $migration->up();
        */
    }
}
