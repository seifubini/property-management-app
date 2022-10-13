<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\PropertyFeature;

class PropertyFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property_features = PropertyFeature::All();

        return view('Admin.PropertyFeatures.index', ['property_features' => $property_features])
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
            'name' => 'required|string|max:55',
            'icon' => 'required|string|max:55',
            'published' => 'required|string'
        ]);

        PropertyFeature::create(array_merge($request->only('name', 'icon', 'published')));

        return redirect()->route('property_features.index')->withSuccess(__('Property Feature created successfully.'));
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
    public function update(Request $request, PropertyFeature $property_feature)
    {
        $request->validate([
            'name' => 'required|string|max:55',
            'icon' => 'required|string|max:55',
            'published' => 'required|string'
        ]);

        $property_feature->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'published' => $request->published
        ]);

        return redirect()->route('property_features.index')->withSuccess(__('Property Feature updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyFeature $property_feature)
    {
        $property_feature->delete();

        return redirect()->route('property_features.index')->withSuccess(__('Property Feature deleted successfully.'));
    }
}
