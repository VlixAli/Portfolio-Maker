<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        return view('portfolio.services.index', [
            'services' => auth()->user()->services
        ]);
    }

    public function create()
    {
        return view('portfolio.services.create');
    }

    public function store(ServiceStoreRequest $request)
    {
        Service::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect()->route('portfolio.services.index')->with('success', 'Service Added!');
    }

    public function edit(Service $service)
    {
        return view('portfolio.services.edit', [
            'service' => $service
        ]);
    }

    public function update(ServiceStoreRequest $request, Service $service)
    {
        $service->update($request->validated());

        return redirect()->route('portfolio.services.index')->with('success', 'Service Updated!');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('portfolio.services.index')->with('info', 'Service Deleted!');
    }

    public function empty()
    {
        Auth::user()->services()->delete();
        return redirect()->route('portfolio.services.index')->with('info', 'All Services Deleted!');
    }
}
