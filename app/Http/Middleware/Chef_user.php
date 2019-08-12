<?php

namespace App\Http\Middleware;

use Closure;

class Chef_user
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
        if(auth()->user()){
            if(auth()->user()->user_role==3){
                return $next($request);
            }else{
                return redirect('login')->with('error','failed to login');
            }
        }else{
            return redirect('login')->with('error','failed to login');
        }

    }
}
