<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title     = 'Customer list';
        $customers = User::where('type',3)->get();
        $data  = compact('title','customers');
        return view('admin.customers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Customer';
        $data  = compact('title');
        return view('admin.customers.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $input          = $request->validated();
        $input['type'] = 3;
        $save    = User::create($input);
        return redirect()->route('admin.customers.index')->with('success','Customer create successully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        $title    = 'Edit Customer';
        $data  = compact('title','customer');
        return view('admin.customers.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, User $user, $id)
    {
        $input   = $request->validated();
        $user = User::find($id);
        //dd($user);
        $user->update($request->validated());
        return redirect()->route('admin.customers.index')->with('success','Customer create successully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back('success','Customer Delete Successfully');
    }
}
