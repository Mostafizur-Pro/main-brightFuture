<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        // echo 'hi';
        // dd($user);
        return view('/home');
    }
}
