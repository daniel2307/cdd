<?php

namespace App\Http\Middleware;

use Closure, Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->getType() == 'user') {
            return $next($request);
        }
        return redirect('/');
    }
    // public function handle($request, Closure $next)
    // {
    //     if ($this->auth->user()->type != 'admin') {
    //         $this->auth->logout();
    //         if ($request->ajax()) {
    //             return response('Unauthorized.', 401);
    //         } else {
    //             return redirect()->to('auth/login');
    //         }
    //     }
    //     return $next($request);
    // }
}
