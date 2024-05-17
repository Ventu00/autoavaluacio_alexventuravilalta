<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $type
     * @param  string|null  $inverse
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type, $inverse = null)
    {
        $user = Auth::user();

        if ($inverse && $user->tipus_usuaris->tipus === $type) {
            return redirect('/home'); 
        }

        if (!$inverse && $user->tipus_usuaris->tipus !== $type) {
            return redirect('/home'); 
        }

        return $next($request);
    }
}
