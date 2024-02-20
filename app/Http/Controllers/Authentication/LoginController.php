<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function store(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->validated('email'),
            'password' => $request->validated('password')
        ];

        if(!auth()->attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => 'your provided credentials aren not correct'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }
}
