@extends('layout.app')
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
                            {{-- <button class="btn btn-info" onclick="window.location='{{ route('front.pages.users.addUser') }}'">New User</button> --}}
                        </div>
                    </div>
                </div>
                <hr class="mt-0 ">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>${{ number_format($employee->salary->salary, 2) }}</td>
                                <td>
                                    <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
