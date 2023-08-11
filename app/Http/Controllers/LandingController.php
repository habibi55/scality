<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LandingController extends Controller
{
        public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){
            $route = $this->redirectDash();
            return redirect($route);
        }
        else{
            return back()->with('loginError','Incorrect email address and / or password!');
        }
    }

    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

        public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 0){
            $redirect = '/pengurus/home';
        }
        if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/evaluator/home';
        }
        if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/admin/home';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
