<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
<<<<<<< Updated upstream

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/catalogue');
        };
        return back()->with('loginError', 'Login failed!');
    }
=======
>>>>>>> Stashed changes
}
