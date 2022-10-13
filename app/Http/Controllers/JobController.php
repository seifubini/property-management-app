<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ClientCase;
use App\Models\Vendor;
use App\Models\Job;
use App\Models\User;
use App\Models\Quotation;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $jobs = DB::table('jobs')
            ->join('quotations', 'quotations.quotation_id', '=', 'jobs.quotation_id')
            ->join('vendors', 'vendors.user_id', '=', 'jobs.vendor_id')
            ->select('jobs.*', 'vendors.name AS vendor_name', 'quotations.bid_price', 'quotations.bid_currency')
            ->orWhere('quotations.created_by', $owner_id)
            ->orWhere('vendors.user_id', $owner_id)
            ->orWhere('jobs.prepared_by', $owner_id)
            ->where('jobs.created_by', $owner_id)->get();

        return view('Admin.Jobs.index', ['jobs' => $jobs])->with('i', (request()->input('page', 1) - 1) * 5);
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
            'quotation_id' => 'required|string',
            'case_id' => 'required|string',
            'vendor_id' => 'required|string',
            'scope_of_work' => 'required|string',
            'agreement' => 'required|string',
            'client_approval' => 'required|string',
            'management_approval' => 'required|string',
        ]);

        $prepared_by = Auth::user()->id;
        $job_id = random_int(1000, 9999);
        $created_by = Auth::user()->id;
        $completed = "No";

        Job::create(array_merge($request->only('quotation_id','vendor_id', 'case_id', 'scope_of_work', 'agreement', 
            'client_approval', 'management_approval'), ['prepared_by' => $prepared_by, 'created_by' => $created_by, 
            'job_id' => $job_id, 'completed' => $completed]
        ));

        return redirect()->route('jobs.index')->withSuccess(__('Job created successfully.'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')->withSuccess(__('Job deleted successfully.'));
    }
}
