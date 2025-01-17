<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('User.dashboard');
    }

    public function home()
    {
        return view('');
    }

    public function Shop()
    {
        return view('User.Shop');
    }

}
