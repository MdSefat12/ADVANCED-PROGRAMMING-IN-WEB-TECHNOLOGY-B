<?php

namespace App\Http\Controllers;

use App\Models\agency;

use Illuminate\Http\Request;
use App\Http\Requests\StoreagencyRequest;
use App\Http\Requests\UpdateagencyRequest;

class AgencyController extends Controller
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
     * @param  \App\Http\Requests\StoreagencyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreagencyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateagencyRequest  $request
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateagencyRequest $request, agency $agency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(agency $agency)
    {
        //
    }
    public function agencyRegistration()
    {
        return view ('pages.agency.agencyregistration');
    }
    public function agencylist()
{

    $students = agency::all();
    return view ('pages.agency.agencylist')->with("students",$students);




    }

    
    public function agencyRegistrationsumitted(Request $request)
    {
        $validate = $request ->validate([

            "name" => "required|alpha|min:2",

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
        $student = new agency();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->phone = $request ->phn;
        $student ->address = $request ->address;
        
        $student -> save();
        
        return redirect()->route("agencylist");

        
       
    }

    public function agencyedit(Request $request)
    {

     $student = agency::where("id",$request->id)->first();

   
    return view("pages.agency.agencyedit")->with("student",$student);

    }
    public function agencysubmit(Request $request)
    {
   
    $student = agency::where("id",$request->id)->first();
 

    $student ->name = $request ->name;
    $student ->password = $request ->password;
    $student ->email = $request ->email;
    $student ->phone = $request ->phn;
    $student ->address = $request ->address;
     $student -> save();

   
 return redirect()->route("agencylist");
    }
    public function agencydelete (Request $request)
    {
        $student = agency::where("id",$request->id)->first();
        $student -> delete();
        return redirect()->route("agencylist");

  
    }


}



