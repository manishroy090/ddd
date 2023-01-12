<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\country;
use Illuminate\Support\Facades\DB;

class countryController extends Controller
{

    public function countries_return(){
        $user=DB::table('countries');
        dd($user);

    }

}
