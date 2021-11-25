<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isNull;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if(!Auth::check()){
            return '/login';
        }else{
            $role = Auth::user()->role;
            Log::info(Auth::user()->center);
            switch ($role) {
                case 'admin':
                    return '/admin_dashboard/'.Auth::user()->center;
                    break;
                case 'user':
                    return '/user_dashboard';
                    break;
                case 'teacher':
                    return '/teacher_dashboard';
                    break;
                default:
                    return '/';
                    break;
            }
        }

    }
}
