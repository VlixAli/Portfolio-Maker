<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\EducationStoreRequest;
use App\Http\Requests\Experience\ExperienceStoreRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('portfolio.experiences.index', [
            'experiences' => auth()->user()->experiences
        ]);
    }

    public function create()
    {
        return view('portfolio.experiences.create');
    }

    public function store(ExperienceStoreRequest $request)
    {
        Experience::create([
            'user_id' => $request->user()->id,
            'position' => $request->position,
            'starting_year' => $request->starting_year,
            'ending_year' => $request->ending_year,
            'company' => $request->company,
            'description' => $request->description,
        ]);

        return redirect()->route('portfolio.experiences.index')->with('success', 'Experience Added!');
    }

    public function edit(Experience $experience)
    {
        return view('portfolio.experiences.edit', [
            'experience' => $experience
        ]);
    }

    public function update(ExperienceStoreRequest $request, Experience $experience)
    {
        $experience->update($request->validated());

        return redirect()->route('portfolio.experiences.index')->with('success', 'Experience Updated!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('portfolio.experiences.index')->with('info', 'Experience Deleted!');
    }

    public function empty()
    {
        Auth::user()->experiences()->delete();
        return redirect()->route('portfolio.experiences.index')->with('info', 'All Education Deleted!');
    }
}
