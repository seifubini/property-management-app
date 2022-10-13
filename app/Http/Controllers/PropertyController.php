<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyHasFeature;
use App\Models\Customer;
use App\Models\Agent;
use App\Models\Vendor;
use App\Models\Tenant;
use App\Models\Service;
use App\Models\ClientCase;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;
        $property_features = PropertyFeature::where('published', 'Yes')->get();
        $customer = Customer::where('user_id', $owner_id)->first();
        if(!is_null($customer))
        {
            $customer_id = $customer->id;
        }
        else
        {
            $customer_id = $owner_id;
        }
        
        $properties = DB::table('properties')
                ->join('agents', 'agents.user_id', '=', 'properties.agent')
                ->join('tenants', 'tenants.property_id', 'properties.id')
                ->select('properties.*', 'agents.name AS agent_name')
                ->where('properties.created_by', $owner_id)
                ->orWhere('tenants.customer_id', $customer_id)
                ->orWhere('agents.user_id', $owner_id)
                ->get();

        return view('Admin.Property Management.index', compact('properties', 'property_features'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::All();
        $property_features = PropertyFeature::where('published', 'Yes')->get();

        return view('Admin.Property Management.create', ['agents' => $agents, 'property_features' => $property_features]);
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
            'rent_period' => 'required|string|max:55', 
            'Price' => 'required|string|max:55', 
            'agent' => 'required|string', 
            'description' => 'required|string|max:500', 
            'latitude' => 'required|string|max:55', 
            'longitude' => 'required|string|max:55', 
            'images' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048', 
            'country' => 'required|string', 
            'city' => 'required|string', 
            'Address' => 'required|string', 
            'zone' => 'required|string', 
            'property_size' => 'required|string', 
            'bed_rooms' => 'required|string', 
            'baths' => 'required|string', 
            'garages' => 'required|string', 
            'floors' => 'required|string', 
            'currency' => 'required|string',
            'building_year' => 'required|string', 
            'features_text' => 'required', 
            'video_url' => 'required|string|max:255', 
            'video_description' => 'required|string|max:255',
            'floor_plans' => 'required|file|mimes:jpeg,jpg,png,svg,pdf,docx|max:2048', 
            'floor_plan_description' => 'required|string|max:255',
            'published' => 'required|string', 
            'phone_number' => 'required|string',
        ]);

        $imageName = 'image_'.$request->name.time().'.'.$request->images->extension();
        $request->images->move(public_path('images/properties'), $imageName);

        $floor_plan = 'plan_'.$request->name.time().'.'.$request->floor_plans->extension();
        $request->floor_plans->move(public_path('images/floor_plans'), $floor_plan);

        $created_by = Auth::user()->id;
        $owner_id = Auth::user()->id;
        $unique_id = random_int(100000, 999999);

        $property = Property::create(array_merge($request->only('name', 'category', 'status', 'rent_period', 'Price', 'agent', 
            'description', 'latitude', 'longitude', 'country', 'city', 'Address', 'zone', 'property_size', 'currency', 
            'bed_rooms', 'baths', 'garages', 'floors', 'building_year', 'video_description', 'video_url', 'phone_number',
            'floor_plan_description', 'published'), ['images' => $imageName, 'floor_plans' => $floor_plan, 
            'created_by' => $created_by, 'owner_id' => $owner_id, 'unique_id' => $unique_id]
        ));

        $property_id = $property->id;

        $features = $request->features_text;
        $count = count($features);

        for($i=0; $i<$count; $i++)
        {
            $info = new PropertyHasFeature;
            
            $info->property_id = $property_id;
            $info->property_feature_id = $features[$i];

            $info->save();
        }

        return redirect()->route('properties.index')->withSuccess(__('Property created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $customers = Customer::All();
        $services = Service::where('status', 'Active')->get();
        $agents = Agent::All();
        $property_features = PropertyFeature::where('published', 'Yes')->get();
        $agent = DB::table('agents')->where('user_id', $property->agent)->first();
        $agent_name = $agent->name;
        $cases = DB::table('client_cases')
                ->join('customers', 'customers.id', '=', 'client_cases.client_id')
                ->select('client_cases.*', 'customers.name AS customer_name')
                ->where('client_cases.property_id', $property->id)->get();
        $tenants = DB::table('tenants')
                ->join('customers', 'customers.id', '=', 'tenants.customer_id')
                ->select('tenants.*', 'customers.name')
                ->where('property_id', $property->id)->get();

        return view('Admin.Property Management.show', ['property' => $property, 'customers' => $customers, 'agents' => $agents, 
            'tenants' => $tenants, 'agent_name' => $agent_name, 'property_features' => $property_features, 
            'services' => $services, 'cases' => $cases])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $agents = Agent::All();
        $all_features = DB::table('property_has_features')
            ->select('property_feature_id')
            ->where('property_id', $property->id)->get();

        $features = $all_features->pluck('property_feature_id')->toArray();

        $property_features = PropertyFeature::where('published', 'Yes')->get();

        return view('Admin.Property Management.edit', ['property' => $property, 'agents' => $agents, 'features' => $features,
            'property_features' => $property_features]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'name' => 'required|string|max:55', 
            'category' => 'required|string', 
            'status' => 'required|string', 
            'rent_period' => 'required|string|max:55', 
            'Price' => 'required|string|max:55', 
            'agent' => 'required|string', 
            'description' => 'required|string|max:500', 
            'latitude' => 'required|string', 
            'longitude' => 'required|string',  
            'country' => 'required|string', 
            'city' => 'required|string', 
            'Address' => 'required|string', 
            'zone' => 'required|string', 
            'property_size' => 'required|string', 
            'bed_rooms' => 'required|string', 
            'baths' => 'required|string', 
            'garages' => 'required|string', 
            'floors' => 'required|string', 
            'building_year' => 'required|string', 
            'features_text' => 'required', 
            'video_url' => 'required|string|max:255', 
            'video_description' => 'required|string|max:255',
            'floor_plan_description' => 'required|string|max:255',
            'published' => 'required|string', 
            'phone_number' => 'required|string',
            'currency' => 'required|string',
        ]);

        if($request->hasFile('images'))
        {
            $request->validate([
                'images' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            ]);

            $imageName = 'image_'.$request->name.time().'.'.$request->images->extension();
            $request->images->move(public_path('images/properties'), $imageName);
        }
        else
        {
            $imageName = $property->images;
        }

        if($request->hasFile('floor_plans'))
        {
            $request->validate([
                'floor_plans' => 'required|file|mimes:jpeg,jpg,png,svg,pdf,docx|max:2048',
            ]);

            $floor_plan = 'plan_'.$request->name.time().'.'.$request->floor_plans->extension();
            $request->floor_plans->move(public_path('images/floor_plans'), $floor_plan);
        }
        else
        {
            $floor_plan = $property->floor_plans;
        }

        $features = $request->features_text;
        $count = count($features);

        for($i=0; $i<$count; $i++)
        {
            $info = new PropertyHasFeature;

            $info->property_id = $property->id;
            $info->property_feature_id = $features[$i];

            $info->save();
        }

        $property->update($request->only('name', 'category', 'status', 'rent_period', 'Price', 'agent', 'currency', 
            'description', 'latitude', 'longitude', 'country', 'city', 'Address', 'zone', 'property_size', 'bed_rooms', 
            'baths', 'garages', 'floors', 'building_year', 'video_description', 'video_url', 'floor_plan_description', 
            'published', 'phone_number'), ['images' => $imageName, 'floor_plans' => $floor_plan]
        );

        return redirect()->route('properties.index')->withSuccess(__('Property updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index')->withSuccess(__('Property deleted successfully.'));
    }
}
