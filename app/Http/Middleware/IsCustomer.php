<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsCustomer
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
        //Checking if he is admin
        if ( !Auth::check() )                                           //Not Logged In
        {
            return redirect('home');
        }
        else if( strcmp("customer",Auth::user()->user_type)!=0 )           //Not admin, then redirect to default page
        {
            return redirect('home');
        }
        //End checking
        return $next($request);
    }
}
