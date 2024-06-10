<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:30|unique:users',
            'password' => 'required|string|min:6',
            'email' => 'required|email|unique:users',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $user = new User();
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;

            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->file = 'images/' . $imageName;
            }

            $user->role = 0; // Set default role or get from request
            $user->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin-user.index')->with('success', 'User deleted successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin-edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:30|unique:users,username,' . $id . ',id_user',
            'email' => 'required|email|unique:users,email,' . $id . ',id_user',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $user = User::findOrFail($id);
            $user->username = $request->username;
            $user->email = $request->email;

            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($user->file && file_exists(public_path($user->file))) {
                    unlink(public_path($user->file));
                }

                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->file = 'images/' . $imageName;
            }

            $user->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}