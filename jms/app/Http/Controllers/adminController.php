<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function addUser(){
        return view('admin.pages.users.addUser');
    }

    public function allUsers(){
        return view('admin.pages.users.allUsers');
    }

    public function addRole(){
        return view('admin.pages.users.addRole');
    }

    public function allRole(){
        return view('admin.pages.users.allRole');
    }
}
