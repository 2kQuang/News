<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
        $products = product::where('Title','like','%'.$request->input('key').'%')->orWhere('content',$request->input('key'))->get();
        return response()->view('user.search',['products'=>$products]);
    }
}
