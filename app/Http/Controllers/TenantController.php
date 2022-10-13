<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\Customer;
use App\Models\Agent;
use App\Models\Vendor;
use App\Models\Tenant;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            'property_id' => 'required|string', 
            'owner_id' => 'required|string', 
            'property_name' => 'required|string', 
            'property_code' => 'required|string', 
            'customer_id' => 'required|string', 
            'owner_address' => 'required|string', 
            'owner_email' => 'required|email', 
            'place_of_reference'  => 'required|string', 
            'property_purpose'  => 'required|string', 
            'property_floor_range'  => 'required|string', 
            'delivery_time'  => 'required|string', 
            'bedrooms_number'  => 'required|string', 
            'preference_area'  => 'required|string', 
            'agent_id'  => 'required|string', 
            'rent_fee'  => 'required|string', 
            'rent_fee_currency'  => 'required|string', 
            'rent_duration'  => 'required|string', 
            'site_visit_vehicle'  => 'required|string', 
            'client_id_card'  => 'required||image|mimes:jpeg,jpg,png,svg|max:2048', 
            'client_comment'  => 'required|string|max:500', 
            'client_remark'  => 'required|string|max:500', 
            'contract_status'  => 'required|string', 
        ]);

        $idName = 'id_'.$request->property_code.time().'.'.$request->client_id_card->extension();
        $request->client_id_card->move(public_path('images/tenants'), $idName);

        $created_by = Auth::user()->id;

        $contract_code = random_int(100000, 999999);

        Tenant::create(array_merge($request->only('property_id', 'owner_id', 'property_name', 'contract_code', 'property_code', 
            'customer_id', 'owner_address', 'owner_email', 'place_of_reference', 'property_purpose', 'property_floor_range', 
            'delivery_time', 'bedrooms_number', 'preference_area', 'agent_id', 'rent_fee', 'rent_fee_currency', 'rent_duration', 
            'site_visit_vehicle', 'client_id_card', 'client_comment', 'client_remark', 'contract_status'), 
            ['client_id_card' => $idName, 'created_by' => $created_by, 'contract_code' => $contract_code]
        ));

        return redirect()->back()->withSuccess(__('Tenant Contract created successfully.'));
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
    public function update(Request $request, Tenant $tenant)
    {
        $request->validate([ 
            'owner_address' => 'required|string', 
            'owner_email' => 'required|email', 
            'place_of_reference'  => 'required|string', 
            'property_purpose'  => 'required|string', 
            'property_floor_range'  => 'required|string', 
            'delivery_time'  => 'required|string', 
            'bedrooms_number'  => 'required|string', 
            'preference_area'  => 'required|string', 
            'agent_id'  => 'required|string', 
            'rent_fee'  => 'required|string', 
            'rent_fee_currency'  => 'required|string', 
            'rent_duration'  => 'required|string', 
            'site_visit_vehicle'  => 'required|string',  
            'client_comment'  => 'required|string|max:500', 
            'client_remark'  => 'required|string|max:500', 
            'contract_status'  => 'required|string', 
        ]);

        if($request->hasFile('client_id_card'))
        {
            $request->validate([
                'client_id_card'  => 'required||image|mimes:jpeg,jpg,png,svg|max:2048',
            ]);

            $idName = 'id_'.$request->property_code.time().'.'.$request->client_id_card->extension();
            $request->client_id_card->move(public_path('images/tenants'), $idName);
        }
        else
        {
            $idName = $tenant->client_id_card;
        }
        
        $tenant->update($request->only('owner_address', 'owner_email', 'place_of_reference', 'property_purpose', 
            'property_floor_range', 'delivery_time', 'bedrooms_number', 'preference_area', 'agent_id', 'rent_fee', 
            'rent_fee_currency', 'rent_duration', 'site_visit_vehicle', 'client_id_card', 'client_comment', 'client_remark', 
            'contract_status'), ['client_id_card' => $idName]
        );

        return redirect()->back()->withSuccess(__('Tenant Contract Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        return redirect()->route('tenants.index')->withSuccess(__('Tenant deleted successfully.'));
    }
}
