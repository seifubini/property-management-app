<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $staffs = Staff::where('created_by', $owner_id)->get();

        return view('Admin.Staffs.index', compact('staffs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,StoreUserRequest $request)
    {
        if($request->hasFile('picture'))
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024'
            ]);

            $imageName = $request->name.time().'.'.$request->picture->extension();
            $request->picture->move(public_path('images/staffs'), $imageName);
        }
        else
        {
            $imageName = "";
        }

        $saved = $user->create(array_merge($request->validate(['name' => 'required', 'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username', 'gender' => 'required|string', 'phone_number' => 
            'required|string|unique:customers,phone_number|min:10|max:13']), ['password' => 'test']));

        $user_id = $saved->id;
        $created_by = Auth::user()->id;
        $id_number = random_int(1000, 9999);

        Staff::create(array_merge($request->only('name', 'email', 'phone_number', 'gender', 'position', 'status', 'joining_date'), 
            ['picture' => $imageName, 'created_by' => $created_by, 'id_number' => $id_number, 'user_id' => $user_id]
        ));

        return redirect()->route('staffs.index')->withSuccess(__('Staff created successfully.'));
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
    public function edit(Staff $staff)
    {
        $user_id = $staff->user_id;
        $user = User::where('id', $user_id)->first();

        $username = $user->username;

        return view('Admin.Staffs.edit', ['staff' => $staff, 'username' => $username]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $this->validate($request, ['name' => 'required', 'phone_number' => 'required|string|min:10|max:13', 
            'gender' => 'required']);

        if($request->hasFile('picture'))
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024'
            ]);

            $imageName = $request->name.time().'.'.$request->picture->extension();
            $request->picture->move(public_path('images/staffs'), $imageName);
        }
        else
        {
            $imageName = $staff->picture;
        }

        $staff->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'position' => $request->position,
            'status' => $request->status,
            'picture' => $imageName,
        ]);

        return redirect()->route('staffs.index')->withSuccess(__('Staff updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $agent->delete();

        return redirect()->route('staffs.index')->withSuccess(__('Staff deleted successfully.'));
    }
}
