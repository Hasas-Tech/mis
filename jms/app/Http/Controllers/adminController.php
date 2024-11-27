<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function login(){
        return view('login');
    }
}
