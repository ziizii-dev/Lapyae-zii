<?php

namespace App\Http\Controllers;

use App\Models\Mileage;
use Illuminate\Http\Request;

class MileageController extends Controller
{
    //create mileage data
    public function mileage(Request $request){
        $data= $request->validate([
            'value'=>'required|string',

           ]);
           Mileage::create($data);
           $mileage=Mileage::get();
           return response()->json($mileage, 200);
    }
}
