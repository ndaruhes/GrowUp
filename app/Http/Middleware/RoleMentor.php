<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMentor
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        return ($user && $user->role == 'Mentor') ? $next($request) : redirect('/');
    }
}
