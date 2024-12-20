<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Salaries;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;

class EmployeesController extends Controller
{
    // Display a listing of employees
    public function index()
    {
        $employees = Employees::with('salary')->get();
        return view('employees.index', compact('employees'));
    }

    // Show the form for creating a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Store a newly created employee
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        $employee = Employees::create($request->only('name', 'position'));

        // Store salary
        Salaries::create([
            'employee_id' => $employee->id,
            'salary' => $request->salary
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee and salary created successfully.');
    }

    // Show the form for editing an employee
    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    // Update an employee and their salary
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        $employee = Employees::findOrFail($id);
        $employee->update($request->only('name', 'position'));

        $employee->salary->update(['salary' => $request->salary]);

        return redirect()->route('employees.index')->with('success', 'Employee and salary updated successfully.');
    }

    // Delete an employee and their salary
    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->salary->delete();
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee and salary deleted successfully.');
    }
}
