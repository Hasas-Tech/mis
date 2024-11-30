<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles;
use Illuminate\Support\Facades;
use App\Http\Controllers\DB;


class roleController extends Controller
{
    public function addRole(){
        return view('admin.pages.users.addRole');
    }

    public function allRole(){

        // $allRoles = DB::table('roles')->select('role_id','role_type')->get();//-
        $allRoles = \Illuminate\Support\Facades\DB::table('roles')->select('role_id','role_type')->get();//+

        return view('admin.pages.users.allRole')->with('allRoles', $allRoles);
    }

    public function storeRole(Request $request){
        $allRoles = new roles();
        $allRoles -> role_type = $request -> role_type;
        $allRoles->save();
        return view('admin.pages.users.addRole');
    }

    public function delRole($role_id)
    {
        $allRoles = roles::find($role_id);

        $allRoles->delete();

        return view('admin.pages.users.allRole');
    }
}
