<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use App\Models\registration;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreloginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreloginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateloginRequest  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateloginRequest $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
    public function login()
{
    return view("pages.Login");
}
public function loginsubmit(Request $request)
{
    $validate = $request ->validate([

        "name" => "required|alpha|min:3",

        
        "password" => "required|min:8|max:16"
      
        

    ],
    [
        "name.required"=>"please put your name",
       
        "password.required" => "plz enter your password"
   
        
    ]
    );


 $registrstion = registration::where("name",$request->name)
 ->where("password",$request->password)
 ->first();

 if($registrstion)
 {
    $request->session()->put("user",$registrstion->name);

    setcookie('remember',$request->name, time()+36000);


    return redirect()->route("admindesh");

 }
 return back();
}


public function logout()
{
    session()->forget("user");
    return redirect()->route("login");
}
}
