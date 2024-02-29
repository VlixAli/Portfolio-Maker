<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hero\StoreRequest;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HeroController extends Controller
{
//    public function index()
//    {
//        return view('portfolio.hero.create');
//    }
    public function create()
    {
        return view('portfolio.hero.create');
    }

    public function store(StoreRequest $request)
    {
        Title::create([
            'name' => $request->validated('name'),
            'user_id' => $request->user()->id,
            'slug' => Str::slug($request->validated('name'))
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Title Added!');
    }
}
