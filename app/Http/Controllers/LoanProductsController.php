<?php

namespace App\Http\Controllers;

use App\Models\LoanProducts;
use Illuminate\Http\Request;

class LoanProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanproducts = loanproducts::all();
        return view('loanproducts.index', ['loanproducts' => $loanproducts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loanproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loanproduct = new loanproducts();
        $loanproduct->name = $request->name;
        $loanproduct->interest_type = $request->interest_type;
        $loanproduct->penalty_rate = $request->penalty_rate;
        $loanproduct->payment_frequency = $request->payment_frequency;
        $loanproduct->interest_rate = $request->interest_rate;
        $loanproduct->loan_fees = $request->loan_fees;
        $loanproduct->save();

        return redirect('loanproducts/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(loanproducts $loanproducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $loanproduct = loanproducts::where('id', $id)->first();
        return view('loanproducts.edit', ['loanproduct' => $loanproduct]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $loanproduct = loanproducts::where('id', $id)->first();
        $loanproduct->name = $request->name;
        $loanproduct->interest_type = $request->interest_type;
        $loanproduct->penalty_rate = $request->penalty_rate;
        $loanproduct->payment_frequency = $request->payment_frequency;
        $loanproduct->interest_rate = $request->interest_rate;
        $loanproduct->loan_fees = $request->loan_fees;
        $loanproduct->save();

        return redirect('loanproducts/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loanproducts $loanproducts)
    {
        //
    }
}
