<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class logincontroller extends Controller
{
    //

public function login()
{
    return view("pages.login");
}

public function loginsubmit(Request $request)
{
    $teacherr = teacher::where("name",$request->name)
 ->where("password",$request->password)
 ->first();

 if($teacherr)
 {
    $request->session()->put("user",$teacherr->name);
    return redirect()->route("teacherdesh");

 }
 return back();


}
public function logout()
{
    session()->forget("user");
    return redirect()->route("login");
}
}