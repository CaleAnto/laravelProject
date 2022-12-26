<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Nette\Schema\Schema;
use Illuminate\Support\Facades\Auth;

class ControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role_id != 'admin') {
            return response()->json([
                'Access Forbidden'
            ], 403);
        }

        return $next($request);
    }
}
