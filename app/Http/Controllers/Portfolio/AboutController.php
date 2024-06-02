<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function edit(About $about): View
    {
        return view('portfolio.about.edit', [
            'about' => $about
        ]);
    }

    public function update(AboutUpdateRequest $request, int $user_id): RedirectResponse
    {
        $about = About::where('user_id', $user_id)->first();
        if (!$about) {
            $about = About::create(['user_id' => $user_id]);
        }
        $about->update($request->validated());
        return redirect()->route('portfolio.index')->with('success', 'Data added!');
    }
}
