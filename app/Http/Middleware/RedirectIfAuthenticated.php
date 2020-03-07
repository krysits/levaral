}
    }
        return $next($request);

        }
            return redirect(RouteServiceProvider::HOME);
        if (Auth::guard($guard)->check()) {
    {
    public function handle($request, Closure $next, $guard = null)
     */
     * @return mixed
     * @param  string|null  $guard
     * @param  \Closure  $next
     * @param  \Illuminate\Http\Request  $request
     *
     * Handle an incoming request.
    /**
{
class RedirectIfAuthenticated

use Illuminate\Support\Facades\Auth;
use Closure;
use App\Providers\RouteServiceProvider;

namespace App\Http\Middleware;

<?php
