<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        return Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]) ?
            'You have successfully logged in' : 'you failed to log in';
    }

    public function checkAuth()
    {
        return Auth::check() ? 'You logged' : 'You are not logged';
    }
}
