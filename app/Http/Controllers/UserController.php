<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return view("user");
    }

    function aboutUser()
    {
        return 'about user';
    }

    function getUserName($name)
    {
        return view('getUser', ['name' => $name]);
    }
}
