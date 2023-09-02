<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\JadwalAbsen;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function home()
    {
        $jadwal_absen = JadwalAbsen::orderBy('id','ASC')->paginate(10);
        $absen = Absen::where('users_id', Auth::user()->id)->orderBy('id', 'asc')->get();

        return view('main.home', compact('jadwal_absen' , 'absen'));
    }

    public function absen()
    {
        return view('main.absen');
    }
        

    public function storeAbsen(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $absen = new Absen();
        $absen->image = $imageName;
        $absen->users_id = Auth::id();
        $absen->save();

        if (auth()->user()->role == 0) {
            return redirect()->route('home-pengurus');
        }

        if (auth()->user()->role == 1) {
            return redirect()->route('home-evaluator');
        }

        if (auth()->user()->role == 2) {
            return redirect()->route('home-admin');
        }
    }


    public function rapor()
    {
        return view('main.rapor');
    }

    public function penilaian()
    {
        // $users = User::where('jabatan', 'jabatan'-1)
        // ->whereIn('departemen', 'departemen' = user()->departemen )
        // // ->whereIn('bidang', [0, 1])
        // ->orderBy('id', 'asc')s
        // ->get();

        $jabatan = auth()->user()->jabatan - 1;
        $users = User::where('jabatan', $jabatan)
        ->whereIn('departemen', [auth()->user()->departemen])
        ->orderBy('id', 'asc')
        ->get();

        // $penilaian = Penilaian::where('users_id', 'receiver_id', Auth::user()->id)->orderBy('id', 'asc')->get();

        // Hasil Penilaian
        $penilaian = Penilaian::where('users_id', Auth::user()->id)
        ->orWhere('receiver_id', Auth::user()->id)
        ->orderBy('id', 'asc')
        ->get();

        return view('main.penilaian', compact('users', 'penilaian'));
        // return view('main.penilaian', compact('users'));
    }

    public function storePenilaian(Request $request, User $user)
    {
        $penilaian = new Penilaian();
        $penilaian->users_id = Auth::id();
        // $penilaian->receiver_id = User::where('npm', '33333333')->first()->id;
        // $penilaian->receiver_id = User::where('npm', $user->npm)->first()->id;
        $penilaian->receiver_id = $request->receiver_id;
        $penilaian->p1 = $request->p1;
        $penilaian->p2 = $request->p2;
        $penilaian->save();

        if (auth()->user()->role == 1) {
            return redirect()->route('home-evaluator');
        }

        if (auth()->user()->role == 2) {
            return redirect()->route('home-admin');
        }
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
            'password' => Hash::make($request->new_password),
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
        return view('main.update-password-form');
    }
    public function updatePassword(Request $request)
    {    
        // cek password Lama
        if(!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'old password not match with your old password');
        }
        
        if ($request->new_password != $request->repeat_password) {
            return back()->with('error', 'new password and repeat password not match');
        }
        
        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

  
        if (auth()->user()->role == 0) {
            return redirect()->route('update-password-form-pengurus')->with('success', 'Profile updated successfully.');
        }

        if (auth()->user()->role == 1) {
            return redirect()->route('profile-evaluator')->with('success', 'Profile updated successfully.');
        }

        if (auth()->user()->role == 2) {
            return redirect()->route('profile-admin')->with('success', 'Profile updated successfully.');
        }

    }
}

