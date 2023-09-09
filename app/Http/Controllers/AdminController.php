<?php

namespace App\Http\Controllers;

use App\Models\JadwalAbsen;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


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
        $user->departemen = $request->departemen;
        $user->bidang = $request->bidang;
        $user->jabatan = $request->jabatan;
        $user->role = $request->role;
        $user->password = Hash::make('cemara2077');

        $request->validate([
        'npm' => 'required|unique:users|max:8',
        'email' => 'required|unique:users'
        // other validation rules
        ], [
            'npm.unique' => 'NPM ini sudah pernah diambil',
            'email.unique' => 'Email ini sudah pernah diambil',
        ]);

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

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('data-pengurus');
    }

    //FUNCTION ABSEN
    public function jadwalAbsen()
    {
        $jadwal_absen = JadwalAbsen::orderBy('id','ASC')->paginate(10);
 
        return view('admin.jadwal-absen', compact('jadwal_absen'));
    }

    public function tambahJadwalAbsen()
    {
        return view('admin.tambah-jadwal-absen');
    }

    public function storeJadwalAbsen(Request $request)
    {
        $jadwal_absen = new JadwalAbsen();
        $jadwal_absen->judul = $request->judul;
        $jadwal_absen->tempat = $request->tempat;
        $jadwal_absen->waktu = $request->waktu;
        $jadwal_absen->save();

        return redirect()->route('jadwal-absen');
    }

    public function editJadwalAbsen(string $id)
    {
        $jadwal_absens = JadwalAbsen::findOrFail($id);

        return view('admin.edit-jadwal-absen', compact('jadwal_absens'));
    }

    public function updateJadwalAbsen(Request $request, string $id)
    {
        $jadwal_absens = JadwalAbsen::findOrFail($id);
        $jadwal_absens->update($request->all());
  
        return redirect()->route('jadwal-absen');
    }

    public function destroyJadwalAbsen($id)
    {
        $jadwal_absens = JadwalAbsen::findOrFail($id);
        $jadwal_absens->delete();

        return redirect()->route('jadwal-absen');
    }

}
