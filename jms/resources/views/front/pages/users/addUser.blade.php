@extends('admin.layout.app')
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
                        <button class="btn btn-info" onclick="window.location='{{ route('admin.pages.users.allUsers') }}'">All Users</button>
                    </div>
                </div>
            </div>
            <hr class="mt-0 ">

            <button class="btn btn-info" >English</button>
            <hr class="mt-0 ">

                    <form>
                        <div class="form-row mb-2">
                          <div class="col">
                            <label class="fw-bolder p-1">Name</label>
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Name">
                          </div>
                          <div class="col">
                            <label class="fw-bolder p-1">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email">
                          </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <label class="fw-bolder p-1">Password</label>
                              <input type="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="col">
                                <label class="fw-bolder p-1">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <label class="fw-bolder p-1">Role</label>
                                <select class="form-control" id="">
                                    <option>Admin</option>
                                    <option>Author</option>
                                    <option selected>User</option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="fw-bolder p-1">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <button class="btn btn-info m-1">Save</button> 
                      </form>
        </div>
        <!-- end of form -->
    </div>
</main>
@endsection