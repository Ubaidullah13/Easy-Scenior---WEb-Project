<?php

namespace App\Http\Middleware;
use App\Models\Users;
use Closure;
use Session;
use Illuminate\Http\Request;

class customAuth
{
    /** *
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         $path = $request->path();
        // if($path=="login" && Session::get('user')){
        // return redirect('/');
        // }
        // else if(($path!="login" && !Session::get('user')) && ($path!="register" && !Session::get('user'))){
        // return redirect('/login');
        // }
        //return $next($request);

        if (session()->has('username') && $path!='login')  // session has username
            {
            //echo $next($request);
            //echo $path;
            return $next($request);   // only then serve next request
            }    
        else if($path=='login')  
             return redirect('/sDash');
         else 
            return redirect('/');



        // $path = $request->path();
        // echo $path;
        // {
        //    return redirect('Goback-Dashboard');
        // }

    }
}
