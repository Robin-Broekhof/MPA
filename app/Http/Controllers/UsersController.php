<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
        
    }

    public function usertest(){
        return view('auth/register');
    }
}

