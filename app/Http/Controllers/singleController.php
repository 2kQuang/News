<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class singleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $single_image = product::inRandomOrder()->where('categori_id','=','6')->take(1)->get();
        $single_image2 = product::inRandomOrder()->where('categori_id','=','6')->take(1)->get();
        $single_content = product::inRandomOrder()->where('categori_id','=','6')->take(3)->get();
        $single_carousel = product::inRandomOrder()->where('categori_id','=','6')->take(5)->get();
        $categories_product = product::all();
        return response()->
        view('user.single_page',[
            'single_image'=>$single_image,'single_image2'=>$single_image2,
            'single_content'=>$single_content,'single_carousel'=>$single_carousel,
            'categories_product'=>$categories_product
    
    ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
