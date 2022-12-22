<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //create country date
    public function country(Request $request){
        $data= $request->validate([
                   "name"=>"required|string",
           ]);
           Country::create($data);
           $country=Country::get();
           return response()->json($country,200);
    }
}
