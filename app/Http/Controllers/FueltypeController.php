<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FueltypeController extends Controller
{
    //fuel type create data
 public function fuel(Request $request){
//    return $request;
$data= $request->validate([
    'name'=>'required|string',
    'car_id'=>'nullable',
    'brnd_id'=>'nullable',

   ]);
   $made=FuelType::create($data);
   return response()->json($made, 200);

    }

 }

