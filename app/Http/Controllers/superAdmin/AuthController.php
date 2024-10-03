<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('superAdmin.auth.login');
    }

    public function loginAction(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        
        if (Auth::guard('superadmin')->attempt([
            'email' => $email, 
            'password' => $password, 
            'status' => 'active'
        ])) {
            return redirect()->intended('super-admin');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Credentials Not Matched!']);
        }
    }

    public function logout(Request $request){
        try {
            Auth::guard('superadmin')->logout();
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect(route('superadmin.login'));
    }
}
