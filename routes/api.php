<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MileageController;
use App\Http\Controllers\BodytypeController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\FueltypeController;
use App\Http\Controllers\EquipmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('car/list',[CarController::class,'carList'])->name('user#carList');
Route::post('/model',[CarModelController::class,'carModel'])->name('user#carModel');
Route::post('/fuel',[FueltypeController::class,'fuel'])->name('user#fuel');
Route::post('/mileage',[MileageController::class,'mileage'])->name('user#mileage');
Route::post('/color',[ColorController::class,'color'])->name('user#color');
Route::post('/country',[CountryController::class,'country']);
Route::post('/equipment',[EquipmentController::class,'equipment']);
Route::post('/bodyType',[BodytypeController::class,'bodyType']);
Route::post('/price',[PriceController::class,'price']);
Route::post('/seller',[SellerController::class,'seller']);
Route::post('/brand',[BrandController::class,'brand']);
Route::post('/car',[CarController::class,'index']);

