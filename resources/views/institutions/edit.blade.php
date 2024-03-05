@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Institutions'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="card">
                <form role="form" method="POST" action={{ route('institutions.update', $institution->id) }}
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Institution</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Company Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name"
                                        value="{{ $institution->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email Address</label>
                                    <input class="form-control" type="email" name="email"
                                        value="{{ $institution->email }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                                    <input class="form-control" type="text" name="phone"
                                        value="{{ $institution->phone }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Registration Date</label>
                                    <input class="form-control" type="text" name="registration_date"
                                        value="{{ $institution->registration_date }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Incorporation Date</label>
                                    <input class="form-control" type="text" name="incorporation_date"
                                        value="{{ $institution->incorporation_date }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address</label>
                                    <input class="form-control" type="text" name="address"
                                        value="{{ $institution->address }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Website</label>
                                    <input class="form-control" type="text" name="website"
                                        value="{{ $institution->website }}" required>
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
