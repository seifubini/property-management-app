<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_id = Auth::user()->id;

        $customers = Customer::where('created_by', $owner_id)->get();

        return view('Admin.Customers.index', compact('customers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Customers.create');
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
            $request->picture->move(public_path('images/customers'), $imageName);
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

        Customer::create(array_merge($request->only('name', 'email', 'phone_number', 'gender'), ['picture' => $imageName, 
            'created_by' => $created_by, 'user_id' => $user_id]
        ));

        return redirect()->route('customers.index')->withSuccess(__('Customer created successfully.'));
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
    public function edit(Customer $customer)
    {
        $user_id = $customer->user_id;
        $user = User::where('id', $user_id)->first();

        $username = $user->username;

        return view('Admin.Customers.edit', ['customer' => $customer, 'username' => $username]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, ['name' => 'required', 'phone_number' => 'required|string|min:10|max:13', 
            'gender' => 'required']);

        if($request->hasFile('picture'))
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024'
            ]);

            $imageName = $request->name.time().'.'.$request->picture->extension();
            $request->picture->move(public_path('images/customers'), $imageName);
        }
        else
        {
            $imageName = $customer->picture;
        }

        $customer->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'picture' => $imageName
        ]);

        return redirect()->route('customers.index')->withSuccess(__('Customer updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->withSuccess(__('Customer deleted successfully.'));
    }
}
