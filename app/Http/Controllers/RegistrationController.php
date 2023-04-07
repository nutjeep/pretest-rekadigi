<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index ()
    {
        return view('auth.registration');
    }

    public function registration (Request $request) 
    {
        $request->validate([
            'username'  => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }
}
