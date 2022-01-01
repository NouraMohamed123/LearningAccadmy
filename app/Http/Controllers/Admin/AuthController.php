<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $data =  $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);




        if(!auth()->guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
        {
            return  redirect(route('AdminHomePage'));
        }
        else
        {
            return 'not exist';
        }
    }

    public function logout(){

        auth()->guard('admin')->logout();
        return redirect(route('Adminlogin'));
    }
}
