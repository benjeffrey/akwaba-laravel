<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Login extends Controller
{
    public function login()
    {
        if(auth()->check()){
            return redirect('admin/dashboard');
        }
        return view('admin.login');
    }

    public function save(Request $R)
    {
        // $user = new User();
        // $this->validate($R, [
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        // $user = User::where('email', $R->email)->where('password', $R->password)->first();
        // if ($user) {
        //     $R->session()->put('user', $user);
        //     return redirect('admin/dashboard');
        // } else {
        //     return redirect()->back()->with('error', 'Invalid Credentials');
        // }

        // Add this temporarily before the auth attempt to debug
        $credentials = $R->only('email', 'password');
        $user = \App\Models\User::where('email', $credentials['email'])->first();
        
        // dd([
        //     'input_credentials' => $credentials,
        //     'user_exists' => $user !== null,
        //     'stored_password' => $user ? $user->password : null,
        //     'is_password_hashed' => $user ? str_starts_with($user->password, '$2y$') : false,
        //     'auth_attempt' => auth()->attempt($credentials),
        //     'auth_check' => auth()->check(),
        //     'session_status' => session()->isStarted(),
        //     'guard' => config('auth.defaults.guard')
        // ]);
        
        if (auth()->attempt($credentials)) {
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
}
