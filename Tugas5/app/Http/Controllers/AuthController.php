<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    function showAdminLogin(){
        return view('adminlogin');
    }
    
    function AdminLoginprocess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('home')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function AdminLogout(){
        Auth()->logout();
        return redirect('home');
    }

// register
    function ShowRegister(){
        return view('register');
    }
    function registration(){
        $user = new User;
        $user->nama = request("nama");
        $user->username = request("username");
        $user->email = request("email");
        $user->password = bcrypt(request("password"));
        $user->save();
        return redirect ('client/index');
    }

    function forgotPassword(){
        return view('adminlogin');
    }


// login

    function showLogin(){
        return view('login');
    }
    
    function Loginprocess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('client/index')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Logout(){
        Auth()->logout();
        return redirect('client/index');
    }

}