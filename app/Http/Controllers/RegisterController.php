<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        //validate
        $fields = $request->validate([
            'username' => ['required', 'max:255',],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:5', 'confirmed'],
        ]);

        //register
        $user = User::create($fields);

        //login
        Auth::login($user);

        //redirect
        return redirect()->route('login');
    }
}
