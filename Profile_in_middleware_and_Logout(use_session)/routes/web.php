<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\pagescontroller;
use App\Http\controllers\studentcontroller;
use App\Http\controllers\TeacherController;
use App\Http\controllers\coursecontroller;
use App\Http\controllers\logincontroller;


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

Route::get('/Registration',[pagescontroller::class,"Registration"])->name("Registration");

Route::get('/list',[studentcontroller::class,"studentlist"])->name("list")->middleware("validteacher");

Route::get('/studentcreate',[studentcontroller::class,"studentcreate"])->name("studentcreate")->middleware("validteacher");

Route::post('/studentcreate',[studentcontroller::class,"studentcreatesumitted"])->name("studentcreate");

Route::get('/studentedit/{id}/{name}',[studentcontroller::class,"studentedit"])->name("studentedit");

Route::post('/studentedit',[studentcontroller::class,"studenteditsubmit"])->name("studentedit");

Route::get('/studentdelete/{id}/{name}',[studentcontroller::class,"studentdelete"]);

Route::get('/teachercreated',[TeacherController::class,"teachercreated"])->name("teachercreated")->middleware("validteacher");

Route::post('/teachercreated',[TeacherController::class,"teachercreatedsubmit"])->name("teachercreated");

Route::get('/teacherlist',[Teachercontroller::class,"teacherlist"])->name("teacherlist")->middleware("validteacher");

Route::get('/teacher/courses',[Teachercontroller::class,"teachercourse"])->name("teacher.course");

Route::get('/courses',[coursecontroller::class,"courseteacher"])->name("teacher.course");

Route::get('/login',[logincontroller::class,"login"])->name("login");

Route::post('/login',[logincontroller::class,"loginsubmit"])->name("login");

Route::get('/logout',[logincontroller::class,"logout"])->name("logout");

Route::get('/teacher/desh',[pagescontroller::class,"teacherdesh"])->name("teacherdesh")->middleware("validteacher");





