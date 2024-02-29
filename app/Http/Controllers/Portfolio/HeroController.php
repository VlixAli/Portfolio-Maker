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
    public function index()
    {
        return view('portfolio.hero.index', [
            'titles' => auth()->user()->titles
        ]);
    }

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

    public function edit(Title $title)
    {
        return view('portfolio.hero.edit', [
            'title' => $title
        ]);
    }

    public function update(StoreRequest $request, Title $title)
    {
        $title->update([
            'name' => $request->validated('name'),
            'slug' => Str::slug($request->validated('name'))
        ]);

        return redirect()->route('portfolio.hero.index')->with('success', 'Title Updated!');
    }

    public function destroy(Title $title)
    {
        $title->delete();
        return redirect()->route('portfolio.hero.index')->with('info', 'Title Deleted!');
    }
}
