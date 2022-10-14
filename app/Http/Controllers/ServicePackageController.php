<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\User;

class ServicePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_packages = ServicePackage::All();
        $services = Service::where('status', 'Active')->get();

        return view('Admin.Service Packages.index', compact('service_packages', 'services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'package_name' => 'required|string|max:55',
            'service_id' => 'required',
            'package_description' => 'required|string|max:500',
            'package_status' => 'required|string'
        ]);

        $created_by = Auth::user()->id;
        $package_id = substr($request->package_name, 0, 3).'/'.random_int(1000, 9999);

        ServicePackage::create(array_merge($request->only('package_name', 'service_id', 'package_description', 'package_status'), 
            ['created_by' => $created_by, 'package_code' => $package_id]
        ));

        return redirect()->route('service_packages.index')->withSuccess(__('Services Package created successfully.'));
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
    public function update(Request $request, ServicePackage $service_package)
    {
        dd($request->service_id);

        $request->validate([
            'package_name' => 'required|string|max:55',
            'service_id' => 'required',
            'package_description' => 'required|string|max:500',
            'package_status' => 'required|string'
        ]);

        $service_package->update($request->only('package_name', 'package_description', 'service_id', 'package_status'));

        return redirect()->route('service_packages.index')->withSuccess(__('Service Package updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePackage $service_package)
    {
        $service_package->delete();

        return redirect()->route('service_packages.index')->withSuccess(__('Services Package deleted successfully.'));
    }
}
