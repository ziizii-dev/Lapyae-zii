<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarModelController extends Controller
{
    //cretae car model
    public function carModel(Request $request){
        $data= $request->validate([
                   "name"=>"required|string",
                   "car_id"=>"nullable",
                   "brand_id"=>"nullable"


           ]);
           CarModel::create($data);
           $carModel=CarModel::get();
           return response()->json($carModel,200);
    }
}
