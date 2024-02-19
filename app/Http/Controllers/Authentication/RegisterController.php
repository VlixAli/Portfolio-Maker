<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
}
