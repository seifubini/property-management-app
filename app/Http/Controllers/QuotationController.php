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
use App\Models\User;
use App\Models\Quotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $quotations = DB::table('quotations')
            ->join('client_cases', 'client_cases.id', '=', 'quotations.case_id')
            ->join('properties', 'properties.id', '=', 'quotations.property_id')
            ->join('vendors', 'vendors.user_id', '=', 'quotations.vendor_id')
            ->select('quotations.*', 'client_cases.case_name', 'client_cases.case_id', 'properties.name', 
                'vendors.name AS vendor_name')
            ->where('quotations.created_by', $owner_id)
            ->orWhere('vendors.user_id', $owner_id)
            ->orWhere('properties.owner_id', $owner_id)
            ->orWhere('properties.created_by', $owner_id)
            ->orWhere('properties.agent', $owner_id)
            ->get();

        return view('Admin.Quotations.index', ['quotations' => $quotations])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_quotation($id)
    {
        $case = DB::table('client_cases')
            ->join('customers', 'customers.id', '=', 'client_cases.client_id')
            ->join('properties', 'properties.id', '=', 'client_cases.property_id')
            ->select('client_cases.*', 'customers.name AS customer_name', 'properties.name', 'properties.images', 
                'properties.category', 'properties.status', 'properties.description', 'properties.Price', 
                'properties.rent_period', 'properties.country', 'properties.city', 'properties.Address', 
                'properties.video_url', 'properties.video_description', 'properties.currency', 'properties.unique_id', 
                'properties.zone')->where('client_cases.id', $id)->first();

        $vendors = Vendor::All();

        return view('Admin.Quotations.create', ['case' => $case, 'vendors' => $vendors]);
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
            'case_id' => 'required|string',
            'property_id' => 'required|string',
            'vendor_id' => 'required|string',
            'bid_price' => 'required|string',
            'bid_currency' => 'required|string',
            'delivery_time' => 'required|string',
        ]);

        $quotation_status = 'Pending';
        $quotation_id = random_int(10000, 99999);
        $created_by = Auth::user()->id;

        Quotation::create(array_merge($request->only('vendor_id', 'property_id', 'case_id', 'bid_price', 'bid_currency', 
            'delivery_time'), ['quotation_id' => $quotation_id, 'created_by' => $created_by, 
            'quotation_status' => $quotation_status]
        ));

        return redirect()->route('quotations.index')->withSuccess(__('Bid submitted successfully.'));
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
    public function update(Request $request, Quotation $quotation)
    {
        if($request->quotation_status == "Approved")
        {
            $quotation->update([
                'quotation_status' => $request->quotation_status,
            ]);
            
            return view('Admin.Jobs.create', ['quotation' => $quotation]);
        }
        else
        {
            $quotation->update([
                'quotation_status' => $request->quotation_status,
            ]);

            return redirect()->route('quotations.index')->withSuccess(__('Bid Status updated successfully.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        $quotation->delete();

        return redirect()->back()->withSuccess(__('Bid deleted successfully.'));
    }
}
