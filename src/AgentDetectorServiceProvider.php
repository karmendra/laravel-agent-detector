<?php

namespace Karmendra\LaravelAgentDetector;

use Illuminate\Support\ServiceProvider;

class AgentDetectorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('agent_detector', function ($app) {
            return new AgentDetector($app['request']->server());
        });

        $this->app->alias('agent_detector', AgentDetector::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['agent_detector', AgentDetector::class];
    }
}
