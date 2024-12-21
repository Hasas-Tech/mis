<?php

// app/Http/Controllers/GoldTransactionController.php
namespace App\Http\Controllers;

use App\Models\Gold_transaction;
use App\Http\Requests\StoreGold_transactionRequest;
use App\Http\Requests\UpdateGold_transactionRequest;
use Illuminate\Http\Request;

class GoldTransactionController extends Controller
{
    // Display all transactions
    public function index()
    {
        $transactions = Gold_transaction::all();
        return view('gold_transactions.index', compact('transactions'));
    }

    // Show form to create a new transaction
    public function create()
    {
        return view('gold_transactions.create');
    }

    // Store a new transaction
    public function store(Request $request)
    {
        $request->validate([
            'transaction_type' => 'required|in:buy,sell',
            'gold_weight_tola' => 'required|numeric',
            'gold_weight_ounce' => 'required|numeric',
            'price_per_tola' => 'required|numeric',
            'price_per_ounce' => 'required|numeric',
        ]);

        // Calculate total amount based on weight and price
        $totalAmount = ($request->gold_weight_tola * $request->price_per_tola) +
            ($request->gold_weight_ounce * $request->price_per_ounce);

        Gold_transaction::create([
            'transaction_type' => $request->transaction_type,
            'gold_weight_tola' => $request->gold_weight_tola,
            'gold_weight_ounce' => $request->gold_weight_ounce,
            'price_per_tola' => $request->price_per_tola,
            'price_per_ounce' => $request->price_per_ounce,
            'total_amount' => $totalAmount,
        ]);

        return redirect()->route('gold_transactions.index')->with('success', 'Transaction created successfully');
    }

    // Show form to edit a transaction
    public function edit(Gold_transaction $Gold_transaction)
    {
        return view('gold_transactions.edit', compact('Gold_transaction'));
    }

    // Update a transaction
    public function update(Request $request, Gold_transaction $Gold_transaction)
    {
        $request->validate([
            'transaction_type' => 'required|in:buy,sell',
            'gold_weight_tola' => 'required|numeric',
            'gold_weight_ounce' => 'required|numeric',
            'price_per_tola' => 'required|numeric',
            'price_per_ounce' => 'required|numeric',
        ]);

        // Calculate total amount based on weight and price
        $totalAmount = ($request->gold_weight_tola * $request->price_per_tola) +
            ($request->gold_weight_ounce * $request->price_per_ounce);

        $Gold_transaction->update([
            'transaction_type' => $request->transaction_type,
            'gold_weight_tola' => $request->gold_weight_tola,
            'gold_weight_ounce' => $request->gold_weight_ounce,
            'price_per_tola' => $request->price_per_tola,
            'price_per_ounce' => $request->price_per_ounce,
            'total_amount' => $totalAmount,
        ]);

        return redirect()->route('gold_transactions.index')->with('success', 'Transaction updated successfully');
    }

    // Delete a transaction
    public function destroy(Gold_transaction $Gold_transaction)
    {
        $Gold_transaction->delete();
        return redirect()->route('gold_transactions.index')->with('success', 'Transaction deleted successfully');
    }
}
