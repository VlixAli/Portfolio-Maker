<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hero\StoreRequest;
use App\Models\Title;
use App\Models\User;
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
        $user = $request->user();
        $request_title = $request->validated('name');
        $title = Title::where('name', '=', $request_title)->first();
        if ($title) {
            if ($user->titles->contains($title)) {
                return redirect()->route('portfolio.hero.index')->with('success', 'Title already exists!');
            } else {
                $user->titles()->attach($title);
            }
        } else {
            $title = Title::create([
                'name' => $request_title,
                'slug' => Str::slug($request->validated('name'))
            ]);
            $user->titles()->attach($title);
        }

        return redirect()->route('portfolio.hero.index')->with('success', 'Title Added!');
    }

    public function edit(Title $title)
    {
        return view('portfolio.hero.edit', [
            'title' => $title
        ]);
    }

    public function update(StoreRequest $request, Title $title)
    {
        $user = $request->user();
        $user->titles()->detach($title);
        $request_title = $request->validated('name');
        $title = Title::where('name', '=', $request_title)->first();
        if ($title) {
            $user->titles()->attach($title);
        } else {
            $title = Title::create([
                'name' => $request_title,
                'slug' => Str::slug($request->validated('name'))
            ]);
            $user->titles()->attach($title);
        }

        return redirect()->route('portfolio.hero.index')->with('success', 'Title Updated!');
    }

    public function destroy(Title $title)
    {
        Auth::user()->titles()->detach($title);
        if ($title->users()->count() == 0) {
            $title->delete();
        }
        return redirect()->route('portfolio.hero.index')->with('info', 'Title Deleted!');
    }

    public function empty()
    {
        Auth::user()->titles()->detach();
        return redirect()->route('portfolio.hero.index')->with('info', 'All Titles Deleted!');
    }
}
