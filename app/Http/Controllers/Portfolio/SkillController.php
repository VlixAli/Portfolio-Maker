<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skills\SkillsStoreRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        return view('portfolio.skills.index', [
            'skills' => auth()->user()->skills
        ]);
    }

    public function create()
    {
        return view('portfolio.skills.create');
    }

    public function store(SkillsStoreRequest $request)
    {
        Skill::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'level' => $request->level,
        ]);

        return redirect()->route('portfolio.skills.index')->with('success', 'Skill Added!');
    }

    public function edit(Skill $skill)
    {
        return view('portfolio.skills.edit', [
            'skill' => $skill
        ]);
    }

    public function update(SkillsStoreRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        return redirect()->route('portfolio.skills.index')->with('success', 'Skill Updated!');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('portfolio.skills.index')->with('info', 'Skill Deleted!');
    }

    public function empty()
    {
        Auth::user()->skills()->delete();
        return redirect()->route('portfolio.skills.index')->with('info', 'All Skills Deleted!');
    }
}
