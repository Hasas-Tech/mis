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
                <form class="col-md-4 m-auto" action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="name" class="fw-bolder p-1">Employee Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                id="name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Email Field -->
                        <div class="col">
                            <label for="position" class="fw-bolder p-1">position</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="position" id="position">
                            @error('position')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Password Fields -->
                        <div class="col">
                            <label for="salary" class="fw-bolder p-1">Product Price</label>
                            <input class="form-control" type="number" name="salary" id="salary" step="0.01">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button class="btn btn-info m-1" type="submit">Save</button>
                </form>
            </div>
            <!-- end of form -->
        </div>
    </main>
@endsection
