<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Display a listing of the roles
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    // Store a newly created role in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role_type' => 'required|string|unique:roles',
        ]);

        $role = Role::create($validatedData);

        return response()->json(['message' => 'Role created successfully!', 'role' => $role]);
    }

    // Remove the specified role from storage
    public function destroy(Role $role)
    {
        $role->delete();

        return response()->json(['message' => 'Role deleted successfully!']);
    }
}
