<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    //get color data
    public function color(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
             "car_id"=>"nullable",
             "brand_id"=>"nullable"
        ]);
        Color::create($data);
        $color=Color::get();
        return response()->json($color, 200);
    }
}
