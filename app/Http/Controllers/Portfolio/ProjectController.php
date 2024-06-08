<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\ProjectStoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        return view('portfolio.projects.index', [
            'projects' => auth()->user()->projects,
        ]);
    }

    public function show(Project $project)
    {
        return view('portfolio.projects.show', [
            'project' => $project,
        ]);
    }

    public function create()
    {
        return view('portfolio.projects.create');
    }

    public function store(ProjectStoreRequest $request)
    {
        $formFields = $request->except('image');
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('projects/images', 'public');
        }
        $formFields['user_id'] = auth()->id();

        Project::create($formFields);

        return redirect()->route('portfolio.projects.index')->with('success', 'Project Added!');
    }

    public function edit(Project $project)
    {
        return view('portfolio.projects.edit', [
            'project' => $project
        ]);
    }

    public function update(ProjectStoreRequest $request, Project $project)
    {
        $formFields = $request->except('image');
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('projects/images', 'public');
        }
        $old_image = $project->image;

        $project->update($formFields);

        if ($old_image && $request->hasFile('image')){
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('portfolio.projects.index')->with('success', 'Project Updated!');
    }

    public function destroy(Project $project)
    {
        $image = $project->image;
        $project->delete();
        Storage::disk('public')->delete($image);

        return redirect()->route('portfolio.projects.index')->with('info', 'Project Deleted!');
    }

    public function empty()
    {
        $images = Auth::user()->projects()->pluck('image')->toArray();
        Auth::user()->projects()->delete();
        Storage::disk('public')->delete($images);

        return redirect()->route('portfolio.projects.index')->with('info', 'All Projects Deleted!');
    }
}
