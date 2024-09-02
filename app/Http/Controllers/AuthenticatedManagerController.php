<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedManagerController extends Controller
{


    public function loginPost(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in with the provided credentials
        $credentials = $request->only('email', 'password');

        // Check if the credentials are valid and if "Remember Me" was checked
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // If authentication is successful, redirect to the dashboard
            return redirect()->intended(route('dashboard'));
        }

        // If the login attempt fails, redirect back to the login page with an error message
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    public function home(){
        return view('admin.dashboard');
    }

}
