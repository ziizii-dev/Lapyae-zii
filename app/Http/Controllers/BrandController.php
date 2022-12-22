<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //create brand data
    public function brand(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'car_id'=>'nullable',
            'price_id'=>'nullable'

        ]);
        Brand::create($data);
        $brand=Brand::get();
        return response()->json($brand, 200);
    }
}
