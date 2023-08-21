<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function rapor()
    {
        return view('main.rapor');
    }
}
