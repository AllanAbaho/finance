<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\InstitutionsController;
use App\Http\Controllers\LoanProductsController;

Route::get('/', function () {
	return redirect('/dashboard');
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/customers/index', [CustomersController::class, 'index'])->name('customers.index');
	Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
	Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
	Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
	Route::put('/customers/update/{id}', [CustomersController::class, 'update'])->name('customers.update');

	Route::get('/institutions/index', [InstitutionsController::class, 'index'])->name('institutions.index');
	Route::get('/institutions/create', [institutionsController::class, 'create'])->name('institutions.create');
	Route::post('/institutions/store', [institutionsController::class, 'store'])->name('institutions.store');
	Route::get('/institutions/edit/{id}', [institutionsController::class, 'edit'])->name('institutions.edit');
	Route::put('/institutions/update/{id}', [institutionsController::class, 'update'])->name('institutions.update');

	Route::get('/loanproducts/index', [LoanProductsController::class, 'index'])->name('loanproducts.index');
	Route::get('/loanproducts/create', [loanproductsController::class, 'create'])->name('loanproducts.create');
	Route::post('/loanproducts/store', [loanproductsController::class, 'store'])->name('loanproducts.store');
	Route::get('/loanproducts/edit/{id}', [loanproductsController::class, 'edit'])->name('loanproducts.edit');
	Route::put('/loanproducts/update/{id}', [loanproductsController::class, 'update'])->name('loanproducts.update');

	Route::get('/expenses/index', [ExpensesController::class, 'index'])->name('expenses.index');
	Route::get('/expenses/create', [expensesController::class, 'create'])->name('expenses.create');
	Route::post('/expenses/store', [expensesController::class, 'store'])->name('expenses.store');
	Route::get('/expenses/edit/{id}', [expensesController::class, 'edit'])->name('expenses.edit');
	Route::put('/expenses/update/{id}', [expensesController::class, 'update'])->name('expenses.update');
});
