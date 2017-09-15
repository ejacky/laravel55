<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Elasticsearch\ClientBuilder;

class ElasticServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('elastic', function () {
            $elastic_host = Config('elastic.host', '192.168.1.233');
            $client = ClientBuilder::create()
                ->setHosts([$elastic_host])
                ->build();

            return $client;
        });
    }
}
