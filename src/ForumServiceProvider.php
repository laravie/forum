<?php namespace Laravie\Forum;

use Orchestra\Foundation\Support\Providers\ExtensionRouteServiceProvider;

class ForumServiceProvider extends ExtensionRouteServiceProvider
{
    /**
     * The application or extension namespace.
     *
     * @var string|null
     */
    protected $namespace = 'Laravie\Forum\Http\Controllers';

    /**
     * The application or extension group namespace.
     *
     * @var string|null
     */
    protected $routeGroup = 'laravie/group';

    /**
     * The fallback route prefix.
     *
     * @var string
     */
    protected $routePrefix = 'forum';

    /**
     * Map extension routes.
     *
     * @return void
     */
    public function map()
    {
        $this->loadFrontendRoutesFrom(__DIR__.'/Http/routes.php');
    }
}
