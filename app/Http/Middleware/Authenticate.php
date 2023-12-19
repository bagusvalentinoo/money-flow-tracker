<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure $next
     * @param ...$guards
     * @return RedirectResponse|mixed
     */
    public function handle($request, Closure $next, ...$guards): mixed
    {
        return !Auth::check() ? redirect()->route('web.auth.sign_in.sign_in_page') : $next($request);
    }
}
