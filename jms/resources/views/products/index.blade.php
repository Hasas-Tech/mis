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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Price</th>
                            <th>type</th>
                            <th>USEL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($product as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->description }}</td>
                                <td>{{ $user->price }}</td>
                                <td>
                                    {{ $user->stock_quantity }}
                                </td>
                                <td>
                                    {{ $user->image_url }}
                                </td>
                                <td>
                                    {{ $user->category_type }}

                                    {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
