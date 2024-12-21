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
                <a href="{{ route('gold_transactions.create') }}">Create Transaction</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Transaction Type</th>
                            <th>Gold Weight (Tola)</th>
                            <th>Gold Weight (Ounce)</th>
                            <th>Price per Tola</th>
                            <th>Price per Ounce</th>
                            <th>Total Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ ucfirst($transaction->transaction_type) }}</td>
                                <td>{{ number_format($transaction->gold_weight_tola, 2) }}</td>
                                <td>{{ number_format($transaction->gold_weight_ounce, 2) }}</td>
                                <td>${{ number_format($transaction->price_per_tola, 2) }}</td>
                                <td>${{ number_format($transaction->price_per_ounce, 2) }}</td>
                                <td>${{ number_format($transaction->total_amount, 2) }}</td>
                                <td>
                                    <a class="btn btn-success text-white"
                                        href="{{ route('gold_transactions.edit', $transaction->id) }}">Edit</a>
                                    <form action="{{ route('gold_transactions.destroy', $transaction->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white" type="submit">Delete</button>
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
