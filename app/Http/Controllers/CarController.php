<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller
{
    //create car data
    public function index(Request $request){
        return $request;
        $data = $request->validate([
            'name'=>'required|string',
            'price_id'=>'required',
            'country_id'=>'required',
            'brand_id'=>'required',
            'mileageFrom_id'=>'required',
            'mileageTo_id'=>'required',
            'equipment_id'=>'required',
            'carModel_id'=>'required',
            'fuel_id'=>'required',
            'seller_id'=>'required',
            'color_id'=>'required',
            'price_id'=>'required',



        ]);
        Car::create($data);
        $car=Car::get();
        return response()->json($car, 200);
    }
}
