<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductapiController;
use App\Http\Controllers\loginapiController;
use App\Http\Controllers\detailapiController;
use App\Http\Controllers\viewapiController;
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

Route::get('/product/list',[ProductapiController::class,"list"])->middleware("APIAUT");

Route::post('/product/add',[ProductapiController::class,"add"]);

Route::post('/login',[loginapiController::class,"login"]);

Route::get('/detail/dd',[detailapiController::class,"detail"]);

Route::post('/detail',[detailapiController::class,"detailsubmit"]);

Route::get('/view/dh',[viewapiController::class,"view"]);

Route::post('/view',[viewapiController::class,"viewsubmit"]);



