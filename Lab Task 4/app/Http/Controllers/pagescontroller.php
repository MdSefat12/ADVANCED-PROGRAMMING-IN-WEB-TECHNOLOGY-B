<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
 public function index(){
    return view ("hellow");
 }

public function profile(){
    $name ="md sefat";
   $id = '19-39533-1';

   $dob = '21-12-2001';
   $names = array("md sefat","mr y","mr z");

    return view ("profile")
    ->with("name",$name)
    ->with("id",$id)
    ->with("dob",$dob)
    ->with("names",$names);
 }
 public function Registration(){
   return view ("Registration");
}
}
