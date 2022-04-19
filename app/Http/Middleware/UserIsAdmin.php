<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->is_admin) {
            Auth::guard('web')->logout();
            return redirect(route('user_is_no_admin'));
        }
        //
        return $next($request);
    }
}
