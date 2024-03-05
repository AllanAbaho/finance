<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customers();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->dob = $request->dob;
        $customer->nin = $request->nin;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->nok_name = $request->nok_name;
        $customer->nok_phone = $request->nok_phone;
        $customer->save();

        return redirect('customers/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customers::where('id', $id)->first();
        return view('customers.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customers::where('id', $id)->first();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->dob = $request->dob;
        $customer->nin = $request->nin;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->nok_name = $request->nok_name;
        $customer->nok_phone = $request->nok_phone;
        $customer->save();

        return redirect('customers/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
