<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view ('login');
    }
}
