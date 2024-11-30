@extends('admin.layout.app')
@section('content')

<main class="bmd-layout-content">
    <div class="container-fluid ">
        <!-- content -->
        <div class="jumbotron shade pt-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <p class="pt-2">All Users</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-info" onclick="window.location='{{ route('admin.pages.users.addUser') }}'">New User</button>
                    </div>
                </div>
            </div>
            <hr class="mt-0 ">
            <table id="example" class="display table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>IMAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start">1</td>
                        <td>Samiullah Jamshidi</td>
                        <td>sjamshidi@test.com</td>
                        <td class="text-center">
                            <label class="btn btn-outline-info" for="">ADMIN</label>
                        </td>
                        <td class="text-center">
                            <a href="../assets/img/jamshidi.png" class="text-center"><i class="fas fa-file-image fa-2x text-center"></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Samiullah Jamshidi</td>
                        <td>sjamshidi@test.com</td>
                        <td class="text-center">
                            <label class="btn btn-outline-info" for="">ADMIN</label>
                        </td>
                        <td class="text-center">
                            <a href="../assets/img/jamshidi.png" class=""><i class="fas fa-file-image fa-2x "></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Samiullah Jamshidi</td>
                        <td>sjamshidi@test.com</td>
                        <td class="text-center">
                            <label class="btn btn-outline-info" for="">ADMIN</label>
                        </td>
                        <td class="text-center">
                            <a href="../assets/img/jamshidi.png" class=""><i class="fas fa-file-image fa-2x "></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Samiullah Jamshidi</td>
                        <td>sjamshidi@test.com</td>
                        <td class="text-center">
                            <label class="btn btn-outline-info" for="">ADMIN</label>
                        </td>
                        <td class="text-center">
                            <a href="../assets/img/jamshidi.png" class=""><i class="fas fa-file-image fa-2x "></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection