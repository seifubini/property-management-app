<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ClientCase;
use App\Models\Vendor;
use App\Models\VendorCase;
use App\Models\User;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $services = Service::where('status', 'Active')->get();
        
        $customers = Customer::All();
        $vendors = Vendor::All();
        $properties = Property::All();
        $cases = DB::table('client_cases')
                ->join('vendor_cases', 'vendor_cases.case_id', '=', 'client_cases.id')
                ->join('customers', 'customers.id', '=', 'client_cases.client_id')
                ->join('properties', 'properties.id', '=', 'client_cases.property_id')
                ->where('client_cases.created_by', '=', $owner_id)
                ->orWhere('client_cases.client_id', '=', $owner_id)
                ->orWhere('client_cases.employee_id', '=', $owner_id)
                ->orWhere('vendor_cases.vendor_id', '=', $owner_id)
                ->orWhere('customers.user_id', '=', $owner_id)
                ->orWhere('properties.owner_id', '=', $owner_id)
                ->orWhere('properties.created_by', '=', $owner_id)
                ->orWhere('properties.agent', '=', $owner_id)
                ->select('client_cases.*', 'customers.name AS customer_name', 'properties.name', 'properties.images', 
                    'properties.category', 'properties.status', 'properties.description', 'properties.Price', 
                    'properties.rent_period', 'properties.country', 'properties.city', 'properties.Address', 
                    'properties.video_url', 'properties.video_description', 'properties.currency', 'properties.unique_id', 
                    'properties.zone')->get();

        return view('Admin.Cases.index', compact('cases', 'services', 'customers', 'properties', 'vendors'))
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
            'case_name' => 'required|string|max:55',
            'client_id' => 'required|string',
            'service_id' => 'required|string',
            'property_id' => 'required|string',
            'case_description' => 'required|string|max:500',
            'case_status' => 'required|string',
        ]);

        $case_id = random_int(1000, 9999);
        $contract_id = 'contract'.'-'.random_int(100, 999);
        $created_by = Auth::user()->id;

        ClientCase::create(array_merge($request->only('case_name', 'client_id', 'service_id', 'property_id', 'case_status', 
            'case_description'), ['case_id' => $case_id, 'created_by' => $created_by, 'contract_id' => $contract_id]
        ));

        return redirect()->back()->withSuccess(__('Case registered successfully.'));
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
    public function update(Request $request, ClientCase $client_case)
    {
        $request->validate([
            'case_name' => 'required|string|max:55',
            'client_id' => 'required|string',
            'service_id' => 'required|string',
            'property_id' => 'required|string',
            'case_description' => 'required|string|max:500',
            'case_status' => 'required|string',
            'case_id' => 'required'
        ]);

        $vendors = $request->vendor_id;
        $count = count($vendors);

        if($count > 0)
        {
            for($i=0; $i<$count; $i++)
            {
                $info = new VendorCase;
                
                $info->case_id = $request->case_id;
                $info->vendor_id = $vendors[$i];

                $info->save();
            }
        }

        DB::table('client_cases')
            ->where('id', $request->case_id)
            ->update([
                'case_name' => $request->case_name, 
                'client_id' => $request->client_id, 
                'service_id' => $request->service_id, 
                'property_id' => $request->property_id, 
                'case_status' => $request->case_status, 
                'case_description' => $request->case_description
            ]);

        return redirect()->back()->withSuccess(__('Case updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientCase $client_case)
    {
        $client_case->delete();

        return redirect()->back()->withSuccess(__('Case deleted successfully.'));
    }
}
