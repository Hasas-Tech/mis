<!-- resources/views/invoices/index.blade.php -->
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
                <a href="{{ route('balances.create') }}">Create Balance</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Money Balance</th>
                            <th>Gold Balance</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($balances as $balance)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>${{ number_format($balance->money_balance, 2) }}</td>
                                <td>{{ number_format($balance->gold_balance, 2) }} grams</td>
                                <td>
                                    <a href="{{ route('balances.edit', $balance->id) }}">Edit</a>
                                    <form action="{{ route('balances.destroy', $balance->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
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
