<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;
            $active = Auth::user()->is_active ;
            Log::info(Auth::user()->center);
            if ($active){
                if (Auth::user()->is_super){
                    return redirect('/super');
                }else{
                    switch ($role) {
                        case 'admin':
                            return redirect('/admin_dashboard/'.Auth::user()->center);
                            break;
                        case 'user':
                            return redirect('/user_dashboard');
                            break;
                        case 'teacher':
                            return redirect('/teacher_dashboard');
                            break;
                        default:
                            return redirect('/');
                            break;
                    }
                }
            }else{
               return redirect('/desactivated');
            }

        }
        return $next($request);
    }
}
