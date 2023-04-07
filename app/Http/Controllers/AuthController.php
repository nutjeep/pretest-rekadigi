<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index ()
    {
        if($user = Auth::user()) {
            return redirect()->intended('/dashboard');
        }
        
        return view('auth.login', [
            'title' => 'GAS | Login'
        ]);
    }

    public function authentication (Request $request)
    {
        $validation = $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required|min:8'
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout (Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
