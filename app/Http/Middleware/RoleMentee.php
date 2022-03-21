<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMentee
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        return ($user && $user->role == 'Mentee') ? $next($request) : redirect('/');
    }
}
