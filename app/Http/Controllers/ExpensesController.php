<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expenses::all();
        return view('expenses.index', ['expenses' => $expenses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expense = new Expenses();
        $expense->voucher_no = $request->voucher_no;
        $expense->payment_method = $request->payment_method;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->transaction_date = date('Y-m-d');
        $expense->save();
        return redirect('expenses/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $expense = Expenses::where('id', $id)->first();
        return view('expenses.edit', ['expense' => $expense]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $expense = Expenses::where('id', $id)->first();
        $expense->voucher_no = $request->voucher_no;
        $expense->payment_method = $request->payment_method;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->save();
        return redirect('expenses/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
