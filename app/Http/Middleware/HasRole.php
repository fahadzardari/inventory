<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next , $role = '')
    {
        
        $user = session('user');
        if($user){
            if($user->role == $role){
                return $next($request);
            }
            else {
                return abort('403' ,'UNAUTHORIZED');
            }
        }
        else{
            return redirect('/');
        }

    }
}
