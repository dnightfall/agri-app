<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Session::get('authenticated')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}

