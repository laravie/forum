<?php namespace Laravie\Forum;

use Illuminate\Routing\Router;
use Orchestra\Support\Providers\Traits\PackageProviderTrait;
use Orchestra\Foundation\Support\Providers\ExtensionRouteServiceProvider;

class ForumServiceProvider extends ExtensionRouteServiceProvider
{
    use PackageProviderTrait;

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
     * Bootstrap the application services.
     *
     * @param  \Illuminate\Http\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $path = realpath(__DIR__.'/../resources');

        parent::boot($router);

        $this->addViewComponent('laravie/forum', 'laravie/forum', "{$path}/views");
    }

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
