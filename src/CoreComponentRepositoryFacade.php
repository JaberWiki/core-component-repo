<?php

namespace JaberWiki\CoreComponentRepository;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JaberWiki\CoreComponentRepository\Skeleton\SkeletonClass
 */
class CoreComponentRepositoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'core-component-repo';
    }
}
