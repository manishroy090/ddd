<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class authController extends Controller
{
    public function view()
    {
        return view('layouts.main');
    }

    public function registerview()
    {
        $countries = Country::get();

        return view('layouts.main', compact('countries'));

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
                'conpassword' => 'required'

            ],
            [
                'required' => '*:attribute required'
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
            'country' => $request['country']



        ]);



    }
    public function users(){
       /* $data = User::all();*/
        $data = User::query()->get()::paginate(5);
        return view('layouts.users',['users'=>$data]);
    }
}
