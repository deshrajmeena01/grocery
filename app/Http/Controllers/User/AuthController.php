<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Register()
    {
        return view('User.Auth.Register');
    }

    public function UserRegister(Request $request)
    {
        $rules = [
            'name' => 'required|max:255|alpha',
            'email' => 'required|max:255|unique:users,email',
            'mobile' => 'required|min:10|unique:users,mobile',
            'password' => 'required|confirmed|-min:8',

        ];

        $Validate = Validator::make($request->all(), $rules);
        if (!$Validate->fails()) {
            $date = now();
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => Hash::make($request->input('password')),
                'created_at' => $date,
            ];            

            $result = DB::table('users')->insert($data);
            if ($result > 0) {

                return response()->json(['stetus_code' => 0, 'message' => 'insert successfully']);
            } else {
                return response()->json(['stetus_code' => 1, 'message' => 'insert not successfully']);
            }
        } else {
            return response()->json(['stetus_code' => 3, 'message' => $Validate->errors()->first()]);
        }
    }

    public function Login()
    {
        return view('User.Auth.Login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

      
        if (Auth::attempt($request->only('email', 'password'))) {

            $user = Auth::user();
            // dd($user);
            if ($user->type == 'User') {
                return redirect()->intended(route('dashboard'))
    ->with('success', 'Welcome to your dashboard!');

            } elseif ($user->type == 'Admin') {
                return redirect()->route('Admin.Dashboard')
                    ->with('success', 'Welcome to the admin dashboard!');
            }else {
                // If user type is unexpected
                Auth::logout();
                return redirect()->route('User.Login')
                    ->with('error', 'Invalid user type.');
            }
           dd('You are logged in');


        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // session()->invalidate();
        // session()->regenerateToken();
        return redirect()->route('User.Login');
    }

}

