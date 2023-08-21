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

    public function rapor()
    {
        return view('main.rapor');
    }

        public function penilaian()
    {
        return view('main.penilaian');
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

        if (auth()->user()->role == 0) {
            return redirect()->route('profile-pengurus')->with('success', 'Profile updated successfully.');
        }

        if (auth()->user()->role == 0) {
            return redirect()->route('profile-evaluator')->with('success', 'Profile updated successfully.');
        }

        if (auth()->user()->role == 0) {
            return redirect()->route('profile-admin')->with('success', 'Profile updated successfully.');
        }
    }

    public function updatePasswordForm()
    {
        // $id = Auth::id();
        // $profile = User::all()->where('id', $id)->firstOrFail();
        return view('main.update-password-form');
    }
    
    public function updatePassword(User $user, Request $request)
    {
        // $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required|string|min:8|confirmed',
        // ]);

        // $user = Auth::user();

        // if (!Hash::check($request->current_password, $user->password)) {
        //     return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        // }

        // $user->password = Hash::make($request->new_password);
        // $user->save();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        // Get authenticated user
        $user = auth()->user();

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        // Update user's password
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);




        if (auth()->user()->role == 0) {
            return back();
        }

        if (auth()->user()->role == 0) {
            return redirect()->route('profile-evaluator')->with('success', 'Profile updated successfully.');
        }

        if (auth()->user()->role == 0) {
            return redirect()->route('profile-admin')->with('success', 'Profile updated successfully.');
        }

    }
}

