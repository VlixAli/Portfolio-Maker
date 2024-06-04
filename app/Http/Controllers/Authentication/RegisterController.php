<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(RegisterRequest $request)
    {
        $userAttributes = $request->validated();

        $user = User::create($userAttributes);
        About::create([
           'user_id' => $user->id
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }


}
