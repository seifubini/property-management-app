<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $vendors = Vendor::where('created_by', $owner_id)->get();

        return view('Admin.Vendors.index', compact('vendors'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::All();

        return view('Admin.Vendors.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,Request $request)
    {
        if($request->hasFile('picture'))
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024'
            ]);

            $imageName = $request->name.time().'.'.$request->picture->extension();
            $request->picture->move(public_path('images/vendors'), $imageName);
        }
        else
        {
            $imageName = "";
        }

        if($request->user_id != "")
        {
            $request->validate([
                'phone_number' => 'required|string|unique:vendors,phone_number|min:10|max:13', 
                'company_name' => 'required|string', 
            ]);

            $user = User::where('id', $request->user_id)->first();

            $user_id = $request->user_id;
            $created_by = Auth::user()->id;

            Vendor::create(array_merge($request->only('phone_number', 'company_name'), ['picture' => $imageName, 
                'name' => $user->name, 'email' => $user->email, 'created_by' => $created_by, 'user_id' => $user_id]
            ));
        }
        else
        {
            $request->validate([
                'name' => 'required', 
                'email' => 'required|email|unique:users,email',
                'username' => 'required|unique:users,username', 
                'company_name' => 'required|string', 
                'phone_number' => 'required|string|unique:vendors,phone_number|min:10|max:13' 
            ]);

            $saved = $user->create(array_merge($request->validate(['name' => 'required', 
                'email' => 'required|email|unique:users,email',
                'username' => 'required|unique:users,username', 'gender' => 'required|string', 'phone_number' => 
                'required|string|unique:vendors,phone_number|min:10|max:13']), ['password' => 'test']));

            $user_id = $saved->id;
            $created_by = Auth::user()->id;

            Vendor::create(array_merge($request->only('name', 'email', 'phone_number', 'company_name'), ['picture' => $imageName, 
                'created_by' => $created_by, 'user_id' => $user_id]
            ));
        }

        return redirect()->route('vendors.index')->withSuccess(__('Vendor created successfully.'));
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
    public function edit(Vendor $vendor)
    {
        $user_id = $vendor->user_id;
        $user = User::where('id', $user_id)->first();

        $username = $user->username;

        return view('Admin.Vendors.edit', ['vendor' => $vendor, 'username' => $username]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $this->validate($request, ['name' => 'required', 'phone_number' => 'required|string|min:10|max:13', 
            'company_name' => 'required']);

        if($request->hasFile('picture'))
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024'
            ]);

            $imageName = $request->name.time().'.'.$request->picture->extension();
            $request->picture->move(public_path('images/vendors'), $imageName);
        }
        else
        {
            $imageName = $vendor->picture;
        }

        $vendor->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'picture' => $imageName
        ]);

        return redirect()->route('vendors.index')->withSuccess(__('Vendor updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendors.index')->withSuccess(__('Vendor deleted successfully.'));
    }
}
