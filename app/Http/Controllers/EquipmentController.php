<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    //get data
    public function equipment(Request $request){
        $data= $request->validate([
                   "name"=>"required|string",
                   "car_id"=>"nullable",
                   "brand_id"=>"nullable"
           ]);
           Equipment::create($data);
           $equipment=Equipment::get();
           return response()->json($equipment,200);
    }

}
