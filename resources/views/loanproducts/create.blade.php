@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'loan products'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="card">
                <form role="form" method="POST" action={{ route('loanproducts.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Add loanproduct</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Product Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Interest Type</label>
                                    <select class="form-select" aria-label="Default select example" name="interest_type">
                                        <option selected>Please select option</option>
                                        <option value="Fixed Rate">Fixed Rate</option>
                                        <option value="Declining Balance">Declining Balance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Interest Rate %</label>
                                    <input class="form-control" type="number" name="interest_rate" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penalty Rate</label>
                                    <input class="form-control" type="number" name="penalty_rate" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Payment Frequency</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="payment_frequency">
                                        <option selected>Please select option</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Annually">Annually</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Loan Fees</label>
                                    <input class="form-control" type="text" name="loan_fees" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>

                </form>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
