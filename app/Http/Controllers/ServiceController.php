<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Providers\ViewServiceProvider;
use Illuminate\Contracts\Cache\Store;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $services = Service::latest()->paginate(ViewServiceProvider::PER_PAGE);

        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $validated = $request->validated();
        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', __('keywords.added_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.form', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiceRequest $request, Service $service)
    {
        $validated = $request->validated();
        $service->update($validated);
        return redirect()->route('admin.services.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
