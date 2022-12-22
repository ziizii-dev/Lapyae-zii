<?php

namespace App\Http\Controllers;

use App\Models\Bodytype;
use Illuminate\Http\Request;

class BodytypeController extends Controller
{
    //create data
    public function bodyType(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'car_id'=>'nullable',
            'brand_id'=>'nullable'
        ]);
        Bodytype::create($data);
        $bodyType= Bodytype::get();
        return response()->json($bodyType, 200);
    }

}
