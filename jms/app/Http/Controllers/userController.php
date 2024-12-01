<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userLogin()
    {
        return view('front.account.login');
    }

    public function addUser()
    {
        return view('front.pages.users.addUser');
    }

    public function allUsers()
    {
        return view('front.pages.users.allUsers');
    }
}
