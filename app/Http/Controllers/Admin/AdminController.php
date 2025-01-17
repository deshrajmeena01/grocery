<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('Admin.Admindashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('User.Login');
    }
    
 
    
}