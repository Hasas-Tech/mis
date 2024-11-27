<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function addUser(){
        return view('admin.pages.users.addUser');
    }

    public function allUsers(){
        return view('admin.pages.users.allUsers');
    }
}
