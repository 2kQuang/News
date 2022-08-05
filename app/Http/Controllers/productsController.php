<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // orderBy('id','Desc')->paginate(10)
    public function admin()
    {
        $products = Product::join('categories','categori_id','categories.id')->select('product.*','categories.id as id_cate','categories.Name')->paginate(10);
        return response()->view('admin.product.admin',['products'=>$products]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_slide = product::paginate(4);
        $product_four = product::orderBy('id','Desc')->paginate(4);
        $product_sports = product::where('categori_id','=','1')->orderBy('id','Desc')->get();
        $product_technology = product::where('categori_id','=','2')->orderBy('id','Desc')->get();
        $product_Business = product::where('categori_id','=','3')->orderBy('id','Desc')->get();
        $product_Entertainment = product::where('categori_id','=','4')->orderBy('id','Desc')->get();
        $categories = categories::paginate(3);
        $categories_product = product::all();
        return response()->view('user.home',
        [   'product_slide'=>$product_slide,'product_four'=>$product_four,
            'product_sports'=>$product_sports,'product_technology'=>$product_technology,
            'product_Business'=>$product_Business,'product_Entertainment'=>$product_Entertainment,
            'categories'=>$categories,'categories_product'=>$categories_product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();
        return response()->view('admin.product.create',['categories'=>$categories]);
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
                'image' => 'required', 
            ], 
            [ 
                'required' => ':attribute Do not leave blank',
            ] 
        );
        if($validate->fails()){
            return redirect()->route('products.create')->withErrors($validate);
        }
        else{
            $path = "assets\img/";
            $image = $request->file('image');
            $image->move(base_path('public\assets\img/'),$image->getClientOriginalName());
            $path = $path . $image->getClientOriginalName();
            $Product = new Product;
            $Product->image = $path;
            $Product->Title = $request->input('title');
            $Product->content = $request->input('content');
            $Product->categori_id = $request->input('categori');
            $Product->save();
            session()->flash('msg', 'The new category was created successfully!!');
            return redirect()->route('product.admin',['id'=>$request->input('id_product')]);
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
        $details = product::where('id','=',$id)->get();
        return response()->view('user.detail',['details'=>$details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_cate)
    {
        $categories_id = Categories::where('id','=',$id_cate)->select('*')->first();
        $categories = categories::all();
        $product = Product::find($id);
        return response()->view('admin.product.update',['product'=>$product,'categories_id'=>$categories_id,'categories'=>$categories,
    
    ]);
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
        Product::where('id',(int)$id)->update([
            'Title' => $request->input('Title'),
            'content' => $request->input('content'),
            'categori_id' => $request->input('categori'),	
        ]);
        if(request()->hasFile('image')){
            $path = "assets\img/";
            $image = $request->file('image');
            $image->move(base_path('public\assets\img/'),$image->getClientOriginalName());
            $path = $path . $image->getClientOriginalName();
            Product::where('id',(int)$id)->update([
                'image' => $path,
            ]);
        }
        session()->flash('msg', 'Update Successfully!!!!');
        return redirect()->route('product.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->action([productsController::class,'admin']);
    }
}
