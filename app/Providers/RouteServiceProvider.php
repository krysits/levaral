}
    }
             ->group(base_path('routes/api.php'));
             ->namespace($this->namespace)
             ->middleware('api')
        Route::prefix('api')
    {
    protected function mapApiRoutes()
     */
     * @return void
     *
     * These routes are typically stateless.
     *
     * Define the "api" routes for the application.
    /**

    }
             ->group(base_path('routes/web.php'));
             ->namespace($this->namespace)
        Route::middleware('web')
    {
    protected function mapWebRoutes()
     */
     * @return void
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * Define the "web" routes for the application.
    /**

    }
        //

        $this->mapWebRoutes();

        $this->mapApiRoutes();
    {
    public function map()
     */
     * @return void
     *
     * Define the routes for the application.
    /**

    }
        parent::boot();

        //
    {
    public function boot()
     */
     * @return void
     *
     * Define your route model bindings, pattern filters, etc.
    /**

    public const HOME = '/home';
     */
     * @var string
     *
     * The path to the "home" route for your application.
    /**

    protected $namespace = 'App\Http\Controllers';
     */
     * @var string
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * This namespace is applied to your controller routes.
    /**
{
class RouteServiceProvider extends ServiceProvider

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

namespace App\Providers;

<?php
