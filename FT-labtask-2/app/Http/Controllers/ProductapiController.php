<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Productapi;
use App\Http\Requests\StoreproductapiRequest;
use App\Http\Requests\UpdateproductapiRequest;

class ProductapiController extends Controller
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
     * @param  \App\Http\Requests\StoreproductapiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductapiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productapi  $productapi
     * @return \Illuminate\Http\Response
     */
    public function show(productapi $productapi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productapi  $productapi
     * @return \Illuminate\Http\Response
     */
    public function edit(productapi $productapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductapiRequest  $request
     * @param  \App\Models\productapi  $productapi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductapiRequest $request, productapi $productapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productapi  $productapi
     * @return \Illuminate\Http\Response
     */
    public function destroy(productapi $productapi)
    {
        //
    }

    public function list()
    {
        $product = Productapi::all();
        return $product;
    }
    public function add(Request $request)
    {
        $student = new productapi();
        $student ->name = $request ->name;
        $student ->password = $request ->password;
        $student ->email = $request ->email;
        $student ->address = $request ->address;
        $student ->phone = $request ->phone;
     
        if($student->save())
        {

         return "succesfull";
        }
    }
}

