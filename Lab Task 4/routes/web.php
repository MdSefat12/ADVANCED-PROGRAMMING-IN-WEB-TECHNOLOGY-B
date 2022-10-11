<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\pagescontroller;
use App\Http\controllers\registercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hellow',[pagescontroller::class,"index"])->name("hellow");

Route::get('/profile',[pagescontroller::class,"profile"])->name("profile");





Route::get('/registercreate',[registercontroller::class,"registercreate"])->name("registercreate");

Route::post('/registercreate',[registercontroller::class,"registersumitted"])->name("registercreate");

