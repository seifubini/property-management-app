<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::All();

        return view('Admin.Facility.index', compact('facilities'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Facility.create');
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
            'category' => 'required|string', 
            'status' => 'required|string',
            'agent' => 'required|string', 
            'description' => 'required|string|max:500', 
            'latitude' => 'required|string', 
            'longitude' => 'required|string', 
            'images' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048', 
            'country' => 'required|string', 
            'city' => 'required|string', 
            'Address' => 'required|string', 
            'zone' => 'required|string', 
            'property_size' => 'required|string',
            'floors' => 'required|string', 
            'building_year' => 'required|string', 
            'features_text' => 'required|string', 
            'video_url' => 'required|string|max:255', 
            'video_description' => 'required|string',
            'floor_plans' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048', 
            'floor_plan_description' => 'required|string',
            'published' => 'required|string', 
            'phone_number' => 'required|string',
        ]);

        $imageName = 'image_'.$request->name.time().'.'.$request->images->extension();
        $request->images->move(public_path('images/properties'), $imageName);

        $floor_plan = 'plan_'.$request->name.time().'.'.$request->floor_plans->extension();
        $request->floor_plans->move(public_path('images/floor_plans'), $floor_plan);

        $created_by = Auth::user()->id;
        $owner_id = Auth::user()->id;
        $manager_id = Auth::user()->id;
        $unique_id = random_int(1000, 9999);

        Property::create(array_merge($request->only('name', 'category', 'status', 'agent', 'description', 'latitude', 
            'longitude', 'country', 'city', 'Address', 'zone', 'property_size', 'floors', 'building_year', 'features_text', 
            'video_description', 'video_url', 'floor_plan_description', 'published', 'phone_number'), ['images' => $imageName, 
            'floor_plans' => $floor_plan, 'created_by' => $created_by, 'owner_id' => $owner_id, 'unique_id' => $unique_id, 
            'manager_id' => $unique_id, 
        ]
        ));

        return redirect()->route('facilities.index')->withSuccess(__('Facility created successfully.'));
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
    public function edit(Facility $facility)
    {
        return view('Admin.Facility.edit', ['facility' => $facility]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $property->delete();

        return redirect()->route('facilities.index')->withSuccess(__('Facility deleted successfully.'));
    }
}
