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
                                    <h3 class="lite-text ">Add Role</h3>
                                    <span class="lite-text text-gray">Report and analytics</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active">Add Role</li>
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
                        <p class="pt-2">New Role</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-info" onclick="window.location='{{ route('admin.pages.users.allRole') }}'">All Role</button>
                    </div>
                </div>
            </div>
            <hr class="mt-0 ">

            <button class="btn btn-info" >English</button>
            <hr class="mt-0 ">

                    <form class="col-md-6 m-auto" action="" method="POST" id="roles" name="roles">
                        @csrf
                        <div class="form-row mb-2">
                            <div class="col">
                                <label>Role Type</label>
                                <input class="form-control" type="text" placeholder="Enter role type" id="role_type" name="role_type">
                            </div>
                        </div>
                        <button class="btn btn-info m-1" type="submit">Add Role</button> 
                      </form>
        </div>
        <!-- end of form -->
    </div>
</main>
@endsection