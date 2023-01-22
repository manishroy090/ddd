<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function view()
    {
        $countries = Country::query()->limit(50)->get();
        return view('layouts.main', compact('countries'));
    }

    public function registerview()
    {
        $countries = Country::query()->limit(10)->get();
        return view('layouts.register', compact('countries'));
    }
    public function creatuser(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'email' => 'required|unique:users|email
                ',
                'phone' => 'required',
                'password' => 'required',
                'conpassword' => 'required|same:password'

            ],
            [
                'required' => '*:attribute required',
                'conpassword.same' => "confirm password should be same"
            ]
        );

        $user = User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => bcrypt($request['password']),
            'conpassword' => bcrypt($request['password']),
            'country' => $request['country']



        ]);
        return redirect('loginview');
    }
    public function loginview()
    {
        return view('layouts.login');
    }
    public function Authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('users');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('msg', 'Logged OUT');
    }
    public function users()
    {
        /* $data = User::all();*/
        $data = User::query()->get();
        $countries = Country::query()->limit(50)->get();
        return view('layouts.users', ['users' => $data], compact('countries'));
    }

}
