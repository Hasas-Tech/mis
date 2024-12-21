@extends('layout.app')
@section('content')
    <main class="bmd-layout-content">
        <div class="container-fluid ">
            <!-- content -->
            <!-- breadcrumb -->
            <div class="row  m-0 pb-4 mb-1 ">
                <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-1">
                    <div class="page-header breadcrumb-header ">
                        <div class="row align-items-end ">
                            <div class="col-lg-8">
                                <div class="page-header-title text-left-rtl">
                                    <div class="d-inline">
                                        <h3 class="lite-text ">Dashboard</h3>
                                        <span class="lite-text text-gray">Report and analytics</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron shade pt-2">
                <!-- form -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="pt-2">New User</p>
                        </div>
                        <div class="col-md-6 text-right">
                            {{-- <button class="btn btn-info" onclick="window.location='{{ route('front.pages.users.allUsers') }}'">All Users</button> --}}
                        </div>
                    </div>
                </div>
                <hr class="mt-0 ">

                <button class="btn btn-info">English</button>
                <hr class="mt-0 ">
                <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="name" class="fw-bolder p-1">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                id="name" value="{{ $customer->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="email" class="fw-bolder p-1">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                id="email" value="{{ $customer->email }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Password Fields -->
                        <div class="col">
                            <label for="phone_number" class="fw-bolder p-1">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter Phone" name="phone_number"
                                id="phone_number" value="{{ $customer->phone_number }}">
                            @error('phone_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="address" class="fw-bolder p-1">Address</label>
                            <input type="text" class="form-control" placeholder="address" name="address" id="address"
                                value="{{ $customer->address }}">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button class="btn btn-info m-1">UPDATE</button>
                </form>
            </div>
            <!-- end of form -->
        </div>
    </main>
@endsection
