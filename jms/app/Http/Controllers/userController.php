<?php
namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $users = User::all();
        return view('users.all-users', compact('users'));
    }



    public function create()
    {
        $allRole = Role::all();
        return view('users.add-user', compact('allRole'));
    }




    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role_type' => 'required|exists:roles,role_type', // Ensure the role exists in the roles table
            'image' => 'nullable|image|max:2048',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role_type' => $validated['role_type'],
            'image' => $request->file('image') ? $request->file('image')->store('user_images', 'public') : null,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Display the specified user
    public function show(User $user)
    {
        return response()->json($user);
    }


    public function edit(User $user)
    {
        $allRole = Role::all();
        return view('users.edit', compact('user', 'allRole'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:8',
            'role_type' => 'required|exists:roles,role_type',
            'image' => 'nullable|image|max:2048',
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
            'role_type' => $validated['role_type'],
            'image' => $request->file('image') ? $request->file('image')->store('user_images', 'public') : $user->image,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }


    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'User deleted successfully!']);
    }
}
