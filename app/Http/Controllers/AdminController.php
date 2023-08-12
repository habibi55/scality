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
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->npm = $request->npm;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('data-pengurus');
    }

    public function edit(string $id)
    {
        $users = User::findOrFail($id);
  
        return view('admin.edit-data-pengurus', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
  
        $users->update($request->all());
  
        return redirect()->route('data-pengurus');
    }

}
