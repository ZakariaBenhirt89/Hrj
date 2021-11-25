<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use function PHPUnit\Framework\isNull;

class MyResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if(isNull(Auth::user())){
            return redirect()->route('login');
        }else{
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect( '/admin_dashboard');
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


    }

}
