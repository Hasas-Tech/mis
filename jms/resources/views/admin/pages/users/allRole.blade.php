@extends('admin.layout.app')
@section('content')

<main class="bmd-layout-content">
    <div class="container-fluid ">
        <!-- content -->
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
        <div class="jumbotron shade pt-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <p class="pt-2">All Roles</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-info" onclick="window.location='{{ route('admin.pages.users.addRole') }}'">New Role</button>
                    </div>
                </div>
            </div>
            <hr class="mt-0 ">
            <table id="example" class="display table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ROLE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allRoles as $role)
                    
                    <tr>
                        <td>{{ $role -> role_id }}</td>
                        <td class="text-center">
                            <label class="btn btn-outline-info" for="">{{ $role -> role_type }}</label>
                        </td>
                        <td class="text-center">
                            <button type="button" href="" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection