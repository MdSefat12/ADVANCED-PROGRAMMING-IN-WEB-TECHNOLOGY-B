<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller

{

    public function _construct()
    {
        $this->middleware("validteacher");
    }
    public function studentcreate()
    {
        return view ('pages.student.studentcreate');
    }
    public function studentcreatesumitted(Request $request)
    {
        $validate = $request ->validate([

            "name" => "required|alpha|min:3",

            "email" => "required|email",
            "password" => "required|min:8|max:16",
            "phn" =>"required|regex:/(01)[0-9]{9}/",
            "address"=>"required|min:5|max:60"
           
            

        ],
        [
            "name.required"=>"please put your name",
            "email.required" =>"The Email must be a valid email address",
            "password.required" => "plz enter your password",
            "phn.required" => "plz enter your phn number",
           
            "address.required"=> "Enter Your Current Address"
            
        ]
        );
        $student = new student();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->phone = $request ->phn;
        $student ->address = $request ->address;
        
        $student -> save();
       return "sumiited";

        
       
    }
    public function studentlist()
    {

        $students = student::all();

        // for($i=0;$i<10;$i++)
        // {
        //     $student = array(

        //    "name" => "student".($i+1),
        //    "id" => "00".($i+1),
        //    "dob" => "21-12-2001"



        //     );
        //     $students[] =(object)$student;
        return view ('pages.student.list')->with("students",$students);

        }
        public function studentedit(Request $request)
        {

        $student = student::where("id",$request->id)->first();

       
        return view ('pages.student.studentedit')->with("student",$student);

        }
        public function studenteditsubmit(Request $request)
        {
       
        $student = student::where("id",$request->id)->first();
     

        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->phone = $request ->phn;
        $student ->address = $request ->address;
         $student -> save();
    
 

       
     return redirect()->route("list");

        }
        public function studentdelete (Request $request)
        {
            $student = student::where("id",$request->id)->first();
            $student -> delete();
            return redirect()->route("list");

      
        }
        
        


       
    }

