<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    //create seller data
    public function seller(Request $request){
        $data=$request->validate([
            'name'=>'required|string',

        ]);
        Seller::create($data);
        $seller=Seller::get();
        return response()->json($seller, 200);
    }
}
