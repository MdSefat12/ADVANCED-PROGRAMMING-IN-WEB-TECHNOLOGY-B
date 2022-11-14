<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
class admincontroller extends Controller
{

    public function _construct()
    {
        $this->middleware("validadmin");
    }
    public function Admindesh()
{
   return view("pages.admin.admindesh");
}

public function adminlist()
{

    $students = registration::all();

    return view ('pages.admin.adminlist')->with("students",$students);

    }


    public function adminedit(Request $request)
        {

         $student = registration::where("id",$request->id)->first();

       
        return view("pages.admin.myprofile")->with("student",$student);

        }
        public function adminsubmit(Request $request)
        {
       
        $student = registration::where("id",$request->id)->first();
     

        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->phone = $request ->phn;
        $student ->address = $request ->address;
         $student -> save();
    
        

       
     return redirect()->route("adminlist");
        }
        public function admindelete (Request $request)
        {
            $student = registration::where("id",$request->id)->first();
            $student -> delete();
            return redirect()->route("adminlist");

      
        }

  
}


