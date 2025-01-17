<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function AdminUserlist()
    {
        $userdata = DB::table('users')->where('type', '!=', 'Admin')->get();
        //    dd($data); 


        return view('Admin.Userlist', compact('userdata'));
    }
}
