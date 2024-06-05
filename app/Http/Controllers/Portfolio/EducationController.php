<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\EducationStoreRequest;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        return view('portfolio.educations.index', [
            'educations' => auth()->user()->educations
        ]);
    }

    public function create()
    {
        return view('portfolio.educations.create');
    }

    public function store(EducationStoreRequest $request)
    {
        Education::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
            'institution' => $request->institution,
            'description' => $request->description,
        ]);

        return redirect()->route('portfolio.educations.index')->with('success', 'Education Added!');
    }

    public function edit(Education $education)
    {
        return view('portfolio.educations.edit', [
            'education' => $education
        ]);
    }

    public function update(EducationStoreRequest $request, Education $education)
    {
        $education->update($request->validated());

        return redirect()->route('portfolio.educations.index')->with('success', 'Education Updated!');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('portfolio.educations.index')->with('info', 'Education Deleted!');
    }

    public function empty()
    {
        Auth::user()->educations()->delete();
        return redirect()->route('portfolio.educations.index')->with('info', 'All Education Deleted!');
    }
}
