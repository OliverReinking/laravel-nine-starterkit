<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsCustomer
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->is_customer) {
            Auth::guard('web')->logout();
            return redirect(route('user_is_no_customer'));
        }
        //
        return $next($request);
    }
}
