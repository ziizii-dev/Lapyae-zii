<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    //create price data
    public function price(Request $request){
        $data = $request->validate([
            'price'=>'required|string',
            'car_id'=>'nullable',
            'brand_id'=>'nullable'
        ]);
        Price::create($data);
        $price= Price::get();
        return response()->json($price, 200);
    }
}
