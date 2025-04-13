<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function users()
    {
        $usersCount = User::count();

        // Return the 'users' view with the variable
        return view('user.users', compact('usersCount'));
    }
}
