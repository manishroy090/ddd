<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class indexController extends Controller
{
    public  function index(){
        return member::find(2)->getgroup;
    }
}
