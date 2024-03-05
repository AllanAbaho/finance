<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Expenses;
use App\Models\Institutions;
use App\Models\LoanProducts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customers = Customers::count();
        $customersList = Customers::all();
        $institutions = Institutions::count();
        $loanproducts = LoanProducts::count();
        $expenses = Expenses::count();
        $expensesList = Expenses::all();
        return view('pages.dashboard', ['customers' => $customers, 'institutions' => $institutions, 'loanproducts' => $loanproducts, 'expenses' => $expenses, 'customersList' => $customersList, 'expensesList' => $expensesList,]);
    }
}
