<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view("auth.login");
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if(Auth::user()->level == 'admin'){
                return redirect('dashboardadmin');
            }elseif(Auth::user()->level == 'user'){
                return redirect('dashboarduser');
            }
        }else{
            return redirect("")->withErrors("Email dan Password yang dimasukan salah")->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
