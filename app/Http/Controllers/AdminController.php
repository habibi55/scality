<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function dataPengurus() 
    {
        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.data-pengurus', compact('users'));
    }

    public function tambahPengurus()
    {
        return view('admin.tambah-pengurus');
    }

    //Function Tambah Pengurus
    public function store(Request $request)
    {
        // // Validate the form data
        // $this->validate($request, [
        //     'name' => 'string|required|min:2',
        //     'email' => 'string|email|required|max:100|unique:users',
        //     'npm' => 'string|required|max:100',
        //     'password' =>'string|required|confirmed|min:8',
        //     'role' => 'required'
        // ]);

        // // Create and save the user
        // $user = User::create(request(['name', 'email','npm,','role','password']));

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->npm = $request->npm;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('data-pengurus');
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
}
