<?php

namespace Asantibanez\LaravelWorkflow;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asantibanez\LaravelWorkflow\Skeleton\SkeletonClass
 */
class LaravelWorkflowFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-workflow';
    }
}
