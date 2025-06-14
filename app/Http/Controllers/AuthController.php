<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login_form');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => true,
                'message' => 'You have successfully logged in'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password'
            ], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin_entrance');
    }

}
