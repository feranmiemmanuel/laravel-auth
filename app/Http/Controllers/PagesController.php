<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wish;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $wishes = Wish::all();
        return view('dashboard', ['users' => $users, 'wishes' => $wishes]);
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
