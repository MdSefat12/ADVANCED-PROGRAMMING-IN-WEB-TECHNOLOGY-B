<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class registercontroller extends Controller
{
    public function registercreate()
    {
        return view ('pages.register.registercreate');
    }
    public function registersumitted(Request $request)
    {
        $Validate = $request ->validate([

            "name" => "required|alpha|min:3",

            "email" => "required|email",
            "password" => "required|min:8|max:16",
            "phn" =>"required|regex:/(01)[0-9]{9}/",
            "address"=>"required|min:5|max:60"
           
            

        ],
        [
            "name.required"=>"please put your name",
            "email.required" =>"The Email must be a valid email address",
            "password.required" => "password must be 8 characters long",
            "phn.required"=>"Enter your phone number",
            "address.required"=> "Enter Your Current Address"
            
        ]
        );
    
        $student = $request ->name;
        $student = $request ->email;
        $student = $request ->password;
        $student = $request ->phn;
        $student = $request ->address;

       
        return $student;
       

        
       
    }
    
      


       
    }

