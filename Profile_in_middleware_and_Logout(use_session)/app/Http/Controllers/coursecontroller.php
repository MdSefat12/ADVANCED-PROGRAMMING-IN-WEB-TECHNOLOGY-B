<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;


class coursecontroller extends Controller
{
    
public function courseteacher()
{
    $c = course::where("id",3)->first();

    return $c->assigedteacher();
}

}