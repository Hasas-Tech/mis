<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Http\Requests\StoreBalanceRequest;
use App\Http\Requests\UpdateBalanceRequest;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $balances = Balance::all();
        return view('balances.index', compact('balances'));
    }

    // Show form to create a new balance
    public function create()
    {
        return view('balances.create');
    }

    // Store a new balance
    public function store(Request $request)
    {
        $request->validate([
            'money_balance' => 'required|numeric',
            'gold_balance' => 'required|numeric',
        ]);

        Balance::create($request->all());

        return redirect()->route('balances.index')->with('success', 'Balance created successfully');
    }

    // Show form to edit an existing balance
    public function edit(Balance $balance)
    {
        return view('balances.edit', compact('balance'));
    }

    // Update an existing balance
    public function update(Request $request, Balance $balance)
    {
        $request->validate([
            'money_balance' => 'required|numeric',
            'gold_balance' => 'required|numeric',
        ]);

        $balance->update($request->all());

        return redirect()->route('balances.index')->with('success', 'Balance updated successfully');
    }

    // Delete an existing balance
    public function destroy(Balance $balance)
    {
        $balance->delete();

        return redirect()->route('balances.index')->with('success', 'Balance deleted successfully');
    }
}
