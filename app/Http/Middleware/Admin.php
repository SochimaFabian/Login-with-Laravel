<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::attempt()){
            if(auth()->user()->typeofuser == 'admin'){
                return $next($request);
            }
        }else{
            return back();
        }
    }
}
