<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            $this->setApiRoutes();
            $this->setWebRoutes();
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    public function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    /**
     * Set the routes for the application.
     *
     * @return void
     */
    public function setWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Public Routes
        Route::middleware(['web', 'guest'])
            ->group(base_path('routes/web/public.php'));

        // General Routes
        Route::middleware(['web', 'auth'])
            ->group(base_path('routes/web/general.php'));

        // Member Routes
        Route::middleware(['web', 'auth', 'role:Member'])
            ->group(base_path('routes/web/member.php'));
    }

    /**
     * Set the routes for the application.
     *
     * @return void
     */
    public function setApiRoutes(): void
    {
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    }
}
