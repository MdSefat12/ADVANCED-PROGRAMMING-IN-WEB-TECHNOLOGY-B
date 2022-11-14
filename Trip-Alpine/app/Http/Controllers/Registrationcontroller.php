<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class Registrationcontroller extends Controller
{

    public function Adminpage()
    {
        return view ('Admin');
    }

    public function Registration()
    {
        return view ('pages.admin.Registration');
    }
    public function Registrationsumitted(Request $request)
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
        $student = new registration();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->phone = $request ->phn;
        $student ->address = $request ->address;
        
        $student -> save();
        return view("pages.Login");

        
       
    }
}
