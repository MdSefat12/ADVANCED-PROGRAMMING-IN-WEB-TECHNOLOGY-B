<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Logincontroller;
use App\Http\controllers\Registrationcontroller;
use App\Http\controllers\admincontroller;
use App\Http\controllers\AgencyController;


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
    return view('Admin');
});


Route::get('/Admin',[Registrationcontroller::class,"Adminpage"])->name("Admin");

Route::get('/Registration',[Registrationcontroller::class,"Registration"])->name("Registration")->middleware("validadmin");

Route::post('/Registration',[Registrationcontroller::class,"Registrationsumitted"])->name("Registrationsubmit");

Route::get('/login',[LoginController::class,"login"])->name("login");

Route::post('/login',[LoginController::class,"loginsubmit"])->name("login");

Route::get('/logout',[LoginController::class,"logout"])->name("logout");

Route::get('/admindesh',[admincontroller::class,"admindesh"])->name("admindesh")->middleware("validadmin");

Route::get('/adminedit/{id}/{name}',[admincontroller::class,"adminedit"])->name("adminedit");

Route::post('/adminedit',[admincontroller::class,"adminsubmit"])->name("adminedit");

Route::get('/adminlist',[admincontroller::class,"adminlist"])->name("adminlist")->middleware("validadmin");

Route::get('/admindelete/{id}/{name}',[admincontroller::class,"admindelete"]);

Route::get('/agencyRegistration',[AgencyController::class,"agencyRegistration"])->name("agencyRegistration")->middleware("validadmin");

Route::post('/agencyRegistration',[AgencyController::class,"agencyRegistrationsumitted"])->name("agencyRegistrationsubmit");

Route::get('/agencylist',[AgencyController::class,"agencylist"])->name("agencylist")->middleware("validadmin");

Route::get('/agencyedit/{id}/{name}',[AgencyController::class,"agencyedit"])->name("agencyedit");

Route::post('/agencyedit',[AgencyController::class,"agencysubmit"])->name("agencyedit");

Route::get('/agencydelete/{id}/{name}',[AgencyController::class,"agencydelete"]);
