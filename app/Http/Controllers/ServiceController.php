<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $services = Service::where('created_by', $owner_id)->get();

        return view('Admin.Services.index', compact('services'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:55', 
            'service_description' => 'required|string|max:500', 
            'unit' => 'required|string|max:55', 
            'unit_price' => 'required|string|max:55',
            'status' => 'required|string|max:55',
            'unit_price_currency' => 'required|string'
        ]);

        $created_by = Auth::user()->id;
        $service_id = substr($request->service_name, 0, 3).'/'.random_int(100, 999);
        
        Service::create(array_merge($request->only('service_name', 'service_description', 'unit', 'unit_price', 
            'unit_price_currency', 'status'), ['created_by' => $created_by, 'service_id' => $service_id]
        ));

        return redirect()->route('services.index')->withSuccess(__('Service created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name' => 'required|string|max:55', 
            'service_description' => 'required|string|max:500', 
            'unit' => 'required|string|max:55', 
            'unit_price' => 'required|string|max:55',
            'status' => 'required|string|max:55',
            'unit_price_currency' => 'required|string|max:55'
        ]);
        
        $service->update($request->only('service_name', 'service_description', 'unit', 'unit_price', 
            'unit_price_currency', 'status'));

        return redirect()->route('services.index')->withSuccess(__('Service updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->withSuccess(__('Service deleted successfully.'));
    }
}
