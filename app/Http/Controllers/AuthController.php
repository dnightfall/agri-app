<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin') {
            Session::put('authenticated', true);
            return redirect()->route('seedlings.index'); // Redirect to seedlings.index
        }

        return redirect()->route('login')->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('authenticated');
        return redirect()->route('login');
    }
}

