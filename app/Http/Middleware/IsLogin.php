<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{

    public function handle(Request $request, Closure $next): Response
    {




        if (Auth::check()) {
            if (Auth::user()->isAdmin == 1) {
                return $next($request);
            } elseif (Auth::user()->isAdmin == 0) {
               
                $userId = Auth::user()->id;
                return redirect()->route('visitor');
            }
        }
        return redirect()->route('auth.login');
    }
}
