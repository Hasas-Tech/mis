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
                <h1>Edit Transaction</h1>
                <form action="{{ route('gold_transactions.update', $Gold_transaction->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="transaction_type">transaction_type</label>
                            <select name="transaction_type" class="form-control" required>
                                <option value="buy" {{ $Gold_transaction->transaction_type == 'buy' ? 'selected' : '' }}>
                                    Buy
                                </option>
                                <option value="sell"
                                    {{ $Gold_transaction->transaction_type == 'sell' ? 'selected' : '' }}>
                                    Sell
                                </option>
                            </select>
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="gold_weight_tola" class="fw-bolder p-1">gold_weight_tola (grams):</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="gold_weight_tola" id="gold_weight_tola"
                                value="{{ $Gold_transaction->gold_weight_tola }}">
                            @error('gold_weight_tola')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="gold_weight_ounce" class="fw-bolder p-1">gold_weight_ounce</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="gold_weight_ounce" id="gold_weight_ounce"
                                value="{{ $Gold_transaction->gold_weight_ounce }}">
                            @error('gold_weight_ounce')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="price_per_tola" class="fw-bolder p-1">price_per_tola</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="price_per_tola" id="price_per_tola" value="{{ $Gold_transaction->price_per_tola }}">
                            @error('price_per_tola')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="price_per_ounce" class="fw-bolder p-1">price_per_ounce:</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="price_per_ounce" id="price_per_ounce"
                                value="{{ $Gold_transaction->price_per_ounce }}">
                            @error('price_per_ounce')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-info m-1" type="submit">UPDATE</button>
                </form>

            </div>
            <!-- end of form -->
        </div>
    </main>
@endsection
