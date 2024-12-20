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
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-row mb-2">
                        <!-- Name Field -->
                        <div class="col">
                            <label for="name" class="fw-bolder p-1">Product Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                id="name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="col">
                            <label for="description" class="fw-bolder p-1">Product Description</label>
                            <input type="text" class="form-control" placeholder="Enter Product Description"
                                name="description" id="description">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <!-- Password Fields -->
                        <div class="col">
                            <label for="price" class="fw-bolder p-1">Product Price</label>
                            <input type="text" class="form-control" placeholder="Enter Product Price" name="price"
                                id="price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="stock_quantity" class="fw-bolder p-1">Product Price</label>
                            <input type="text" class="form-control" placeholder="Enter stock_quantity"
                                name="stock_quantity" id="stock_quantity">
                            @error('stock_quantity')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <!-- Password Fields -->
                        <div class="col">
                            <label for="category_type">Category</label>
                            <select name="category_type" class="form-control" required>
                                @foreach ($catetories as $category)
                                    <option value="{{ $category->id }}">{{ $category->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="image_url" class="fw-bolder p-1">Product Image</label>
                            <input type="text" class="form-control" placeholder="Enter stock_quantity" name="image_url"
                                id="image_url">
                            @error('image_url')
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
