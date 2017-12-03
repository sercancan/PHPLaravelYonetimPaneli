<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       if (Auth::guard($guard)->check()) {
      /*   if(Auth::user()->aktiflik == 0){
             return redirect("yonetici/admurunler");
         }else{
           Auth::logout();
           return redirect("/login");
         }*/
         return redirect('/home');
        }


      /*  if(\Auth::check() == true){
              if(\Auth::user()->aktiflik == 0){
                  return redirect("yonetici/admurunler");
              }else{
                Auth::logout();
                return redirect("login");
              }
        }
*/
        return $next($request);
    }
}
