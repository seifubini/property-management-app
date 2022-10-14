<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\Staff;
use App\Models\Inspection;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('name', 'ASc')->get();
        $staffs = Staff::where('status', 'Active')->orderBy('name', 'ASc')->get();

        return view('Admin.Inspections.index', compact('properties', 'staffs'));
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

    public function get_inspections()
    {
        $user_id = Auth::user()->id;

        //$inspections = Inspection::All();
        $inspections_for_calendar = DB::table('inspections')
            ->join('properties', 'properties.id', '=', 'inspections.property_id')
            ->select('inspections.id AS id', 'inspections.inspection_date AS start', 
                'inspections.inspection_color AS className', 'inspections.inspection_comment AS description',
                DB::raw("CONCAT(inspections.inspection_id,' - ',properties.name) AS title"))
            ->where('inspections.created_by', $user_id)
            ->orWhere('inspections.staff_id', $user_id)
            ->orWhere('inspections.owner_id', $user_id)
            ->orWhere('properties.created_by', $user_id)
            ->orWhere('properties.owner_id', $user_id)
            ->orWhere('properties.agent', $user_id)->get();

        return $inspections = json_encode($inspections_for_calendar);
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
            'inspection_date' => 'required|date',
            'property_id' => 'required|string',
            'inspection_status' => 'required|string',
            'staff_id' => 'required|string'
        ]);

        $property = Property::where('id', $request->property_id)->first();

        $created_by = Auth::user()->id;
        $owner_id = $property->id;
        $inspection_id = random_int(100000, 999999);

        if($request->inspection_status == 'Confirmed')
        {
            $inspection_color = 'fc-event-light fc-event-solid-success';
        }
        elseif($request->inspection_status == 'Pending')
        {
            $inspection_color = 'fc-event-light fc-event-solid-warning';
        }
        elseif($request->inspection_status == 'Completed')
        {
            $inspection_color = 'fc-event-light fc-event-solid-primary';
        }
        elseif($request->inspection_status == 'Cancelled')
        {
            $inspection_color = 'fc-event-light fc-event-solid-danger';
        }
        else
        {
            $inspection_color = 'fc-event-info';
        }
        

        Inspection::create(array_merge($request->only('property_id', 'inspection_date', 'inspection_status', 'staff_id'), 
            ['inspection_id' => $inspection_id, 'created_by' => $created_by, 'owner_id' => $owner_id, 
            'inspection_color' => $inspection_color]
        ));

        return redirect()->route('inspections.index')->withSuccess(__('Inspection created successfully.'));
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
        $properties = Property::orderBy('name', 'ASc')->get();
        $staffs = Staff::where('status', 'Active')->orderBy('name', 'ASc')->get();

        $inspection = Inspection::where('id', $id)->first();
        
        return view('Admin.Inspections.edit', ['inspection' => $inspection, 'properties' => $properties, 'staffs' => $staffs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspection $inspection)
    {
        $request->validate([
            'inspection_date' => 'required|date',
            'property_id' => 'required|string',
            'inspection_status' => 'required|string',
            'staff_id' => 'required|string'
        ]);

        if($request->hasFile('inspection_image'))
        {
            $request->validate([
                'inspection_image' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            ]);

            $imageName = 'image_'.$inspection->inspection_id.time().'.'.$request->inspection_image->extension();
            $request->inspection_image->move(public_path('images/inspections'), $imageName);
        }
        else
        {
            $imageName = $inspection->inspection_image;
        }

        if($request->hasFile('inspection_attachment'))
        {
            $request->validate([
                'inspection_attachment' => 'required|file|mimes:jpeg,jpg,png,svg,pdf,docx|max:2048',
            ]);

            $inspection_attachment = 'file_'.$inspection->inspection_id.time().'.'.$request->inspection_attachment->extension();
            $request->inspection_attachment->move(public_path('images/inspections'), $inspection_attachment);
        }
        else
        {
            $inspection_attachment = $inspection->inspection_attachment;
        }

        $property = Property::where('id', $request->property_id)->first();

        $owner_id = $property->id;

        if($request->inspection_status == 'Confirmed')
        {
            $inspection_color = 'fc-event-light fc-event-solid-success';
        }
        elseif($request->inspection_status == 'Pending')
        {
            $inspection_color = 'fc-event-light fc-event-solid-warning';
        }
        elseif($request->inspection_status == 'Completed')
        {
            $inspection_color = 'fc-event-light fc-event-solid-primary';
        }
        elseif($request->inspection_status == 'Cancelled')
        {
            $inspection_color = 'fc-event-light fc-event-solid-danger';
        }
        else
        {
            $inspection_color = 'fc-event-info';
        }

        $inspection->update([
            'inspection_date' => $request->inspection_date, 
            'property_id' => $request->property_id, 
            'staff_id' => $request->staff_id, 
            'inspection_status' => $request->inspection_status, 
            'inspection_comment' => $request->inspection_comment, 
            'inspection_description' => $request->inspection_description, 
            'owner_comment' => $request->owner_comment,
            'inspection_image' => $imageName, 
            'owner_id' => $owner_id,
            'inspection_attachment' => $inspection_attachment, 
            'inspection_color' => $inspection_color,
        ]);

        return redirect()->route('inspections.index')->withSuccess(__('Inspection updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        $inspection->delete();

        return redirect()->route('inspections.index')->withSuccess(__('Inspection deleted successfully.'));
    }
}
