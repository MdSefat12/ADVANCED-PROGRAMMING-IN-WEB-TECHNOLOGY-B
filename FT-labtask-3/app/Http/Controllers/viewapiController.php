<?php

namespace App\Http\Controllers;

use App\Models\view;
use Illuminate\Http\Request;
use App\Http\Requests\StoreviewRequest;
use App\Http\Requests\UpdateviewRequest;

class viewapiController extends Controller
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
     * @param  \App\Http\Requests\StoreviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\view  $view
     * @return \Illuminate\Http\Response
     */
    public function show(view $view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\view  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(view $view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateviewRequest  $request
     * @param  \App\Models\view  $view
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateviewRequest $request, view $view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\view  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(view $view)
    {
        //
    }
    public function view()
    {
        $product = view::all();
        return $product;
    }
    public function viewsubmit(Request $request)
    {
        $student = new view();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->destination = $request ->destination;
        $student ->hometown = $request ->hometown;
        
     
        if($student->save())
        {

         return "succesfull";
        }
    }
}
