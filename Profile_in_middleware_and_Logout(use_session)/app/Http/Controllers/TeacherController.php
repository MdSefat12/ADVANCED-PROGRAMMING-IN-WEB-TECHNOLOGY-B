<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function _construct()
    {
        $this->middleware("validteacher");
    }
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
     * @param  \App\Http\Requests\StoreteacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreteacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateteacherRequest  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateteacherRequest $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        //
    }

    public function teachercreated()
    {
     return view ("pages.teacher.teachercreated");
    }
    public function teachercreatedsubmit(Request $request)
    {
        $teacher= new teacher();
    
        $teacher ->name = $request ->name;
        $teacher ->password = $request ->password;
        $teacher ->email = $request ->email;
        
        
        $teacher -> save();
        return redirect()->route("teacherlist");
    }
    public function teacherlist()
    {
        $teacher = teacher::all();

    return view("pages.teacher.teacherlist")->with("teacher",$teacher);

    }

    public function teachercourse()
    {
        $t = teacher::where("id",3)->first();
        return $t->assignedcourse();
    }
}
