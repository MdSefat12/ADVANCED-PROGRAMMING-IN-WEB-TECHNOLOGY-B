<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class detailapiController extends Controller
{
    public function detail()
    {
        $product = detail::all();
        return $product;
    }
    public function detailsubmit(Request $request)
    {
        $student = new detail();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->address = $request ->address;
    
     
        if($student->save())
        {

         return "succesfull";
        }
        else{
            return"no detail found";
        }
    }
}
