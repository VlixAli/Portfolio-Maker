<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index',[
            'titles' => auth()->user()->titlesString,
            'about' => auth()->user()->about,
            'skills' => auth()->user()->skills,
            'educations' => auth()->user()->educations,
            'experiences' => auth()->user()->experiences,
            'projects' => auth()->user()->projects,
            'services' => auth()->user()->services,
        ]);
    }
}
