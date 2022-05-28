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

        if (session()->has('user') && $path!='login')  // session has username
            {
            //echo $next($request);
            //echo $path;
            return $next($request);   // only then serve next request
            }   
        else if($path=='login' && ( !session()->has('user')))
             return $next($request);
        else if(($path=='login') && ( Session::get('user')['status']=="student"))
             return redirect('/StudentDashboard');
        else if(($path=='login') && ( Session::get('user')['status']=="tutor"))
             return redirect('/TutorDashboard');
        else if(($path=='login') && ( Session::get('user')['status']=="admin"))
         return redirect('/AdminDashboard');
        else 
         return redirect('/');



        // $path = $request->path();
        // echo $path;
        // {
        //    return redirect('Goback-Dashboard');
        // }

    }
}
