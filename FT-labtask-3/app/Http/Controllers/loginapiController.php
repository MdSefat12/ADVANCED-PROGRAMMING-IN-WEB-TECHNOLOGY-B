<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuser;
use App\Models\token;
use Illuminate\Support\Str;
use DateTime;

class loginapiController extends Controller
{
    public function login(Request $req)
    {
        $user = cuser:: where("username",$req->username)->where("password",$req->password)->first();
        if($user)
        {
            $api_token = Str::random(64);

            $token = new token();
            $token->userid = $user->id;
            $token->token = $api_token;
            $token-> created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "no user found";
        
    }
}

