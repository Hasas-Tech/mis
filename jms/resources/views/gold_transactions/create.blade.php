<!-- resources/views/gold_transactions/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Transaction</h1>

    <form action="{{ route('gold_transactions.store') }}" method="POST">
        @csrf
        <div>
            <label for="transaction_type">Transaction Type:</label>
            <select name="transaction_type" required>
                <option value="buy">Buy</option>
                <option value="sell">Sell</option>
            </select>
        </div>
        <div>
            <label for="gold_weight_tola">Gold Weight (Tola):</label>
            <input type="text" name="gold_weight_tola" required>
        </div>
        <div>
            <label for="gold_weight_ounce">Gold Weight (Ounce):</label>
            <input type="text" name="gold_weight_ounce" required>
        </div>
        <div>
            <label for="price_per_tola">Price per Tola:</label>
            <input type="text" name="price_per_tola" required>
        </div>
        <div>
            <label for="price_per_ounce">Price per Ounce:</label>
            <input type="text" name="price_per_ounce" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection


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
                <form action="{{ route('gold_transactions.store') }}" method="POST">
                    @csrf
                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="transaction_type">transaction_type</label>
                            <select name="transaction_type" class="form-control" required>
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="gold_weight_tola" class="fw-bolder p-1">gold_weight_tola (grams):</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="gold_weight_tola" id="gold_weight_tola">
                            @error('gold_weight_tola')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="transaction_type">transaction_type</label>
                            <select name="transaction_type" class="form-control" required>
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="gold_weight_tola" class="fw-bolder p-1">gold_weight_tola (grams):</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="gold_weight_tola" id="gold_weight_tola">
                            @error('gold_weight_tola')
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
