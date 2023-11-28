<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $id_user = Auth::id();

        $data_user = User::with('anak')->find($id_user);

        $data_anak = $data_user->anak;

        return view('dashboard', compact('data_anak'));
    }
}
