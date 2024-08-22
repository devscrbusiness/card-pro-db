<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('profile.admin-usuarios');
    }

    public function search(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        return view('profile.admin-usuarios', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('profile.edit-user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'telefono' => 'required|string|max:255',
            'ocupacion' => 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado con éxito');
    }
}
