<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function addRole(){
        return view('admin.pages.users.addRole');
    }

    public function allRole(){
        return view('admin.pages.users.allRole');
    }
}
