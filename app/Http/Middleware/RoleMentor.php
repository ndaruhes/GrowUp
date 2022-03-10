<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMentor
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
        $user = $request->user();
        if ($user) {
            if ($user->role == 'Mentor') {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
