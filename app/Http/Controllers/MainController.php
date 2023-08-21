<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('main.home');
    }

    public function profile()
    {
        $id = Auth::id();
        $profile = User::all()->where('id', $id)->firstOrFail();
        return view('main.profile', compact('profile'));
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'npm' => $request->npm,
            'updated_at' => now()
        ]);
 
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function updatePasswordForm()
    {
        // $id = Auth::id();
        // $profile = User::all()->where('id', $id)->firstOrFail();
        return view('main.update-password-form');
    }
    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');

    }
}

