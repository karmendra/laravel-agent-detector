<?php

namespace Karmendra\LaravelAgentDetector\Facades;

use Illuminate\Support\Facades\Facade;

class AgentDetector extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'agent_detector';
    }
}
