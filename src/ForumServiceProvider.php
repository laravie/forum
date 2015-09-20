<?php namespace Laravie\Forum;

use Orchestra\Foundation\Support\Providers\ModuleServiceProvider;

class ForumServiceProvider extends ModuleServiceProvider
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
     * Boot extension components.
     *
     * @return void
     */
    protected function bootExtensionComponents()
    {
        $path = realpath(__DIR__.'/../resources');

        $this->addViewComponent('laravie/forum', 'laravie/forum', "{$path}/views");
    }

    /**
     * Map extension routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        $path = realpath(__DIR__);

        $this->afterExtensionLoaded(function () use ($path) {
            $this->loadFrontendRoutesFrom("{$path}/Http/frontend.php");
        });
    }
}
