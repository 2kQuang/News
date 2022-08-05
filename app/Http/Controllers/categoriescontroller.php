<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class categoriescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        return response()->view('admin.categories.admin',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [ 
                'name' => 'required | unique:categories',
            ], 
            [ 
                'required' => ':attribute Do not leave blank',
            ] 
        );
        if($validate->fails()){
            return redirect()->route('categories.create')->withErrors($validate);
        }
        else{
            $category = new Categories;
            $category->name = $request->input('name');
            $category->save();
            session()->flash('msg', 'The new category was created successfully!!');
            return redirect()->route('categories.admin');
        }
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
        $categories = Categories::find($id);
        return response()->view('admin.categories.update',['categories'=>$categories]);
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
        Categories::where('id',$id)->update([
            'name' => $request->input('name'),
            
        ]);
        session()->flash('msg', 'Update Successfully!!!!');
        return redirect()->route('categories.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::where('id',$id)->delete();
        return redirect()->action([categoriescontroller::class,'index']);
    }
}
