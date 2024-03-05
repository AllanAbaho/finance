@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Expenses'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center mb-3">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Edit Expense</h6>
                                <p class="text-sm mb-sm-0">Please fill in the form below to edit expense</p>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-4 py-4">
                        <form role="form" class="text-start" method="POST"
                            action="{{ route('expenses.update', $expense->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">

                                    <label>Voucher No.</label>
                                    <div class="mb-3">
                                        <input type="number" value="{{ $expense->voucher_no }}" id="voucher_no"
                                            name="voucher_no" class="form-control" placeholder="30000001" required>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <label>Payment Method</label>
                                    <div class="mb-3">
                                        <select class="form-select" name="payment_method">
                                            <option value="Cash"
                                                {{ $expense->payment_method == 'Cash' ? 'selected' : '' }}>
                                                Cash
                                            </option>
                                            <option value="Bank"
                                                {{ $expense->payment_method == 'Bank' ? 'selected' : '' }}>
                                                Bank
                                            </option>
                                            <option value="Wallet"
                                                {{ $expense->payment_method == 'Wallet' ? 'selected' : '' }}>
                                                Wallet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label>Amount</label>
                            <div class="mb-3">
                                <input type="number" value="{{ $expense->amount }}" id="amount" name="amount"
                                    class="form-control" placeholder="1000000" required>
                            </div>
                            <label>Description</label>

                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $expense->description }}</textarea>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
