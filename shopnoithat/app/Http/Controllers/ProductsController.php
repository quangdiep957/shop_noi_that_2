<?php

namespace App\Http\Controllers;
use App\Models\product_models;
use App\Models\style_models;
use App\Models\categorie_models;
use App\Models\partner_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $product=product_models::orderBy('id','desc')->paginate(10);
        return view('product.index',['products'=>$product]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat=categorie_models::all();
        $style=style_models::all();
        $partner=partner_models::all();
        return view('product.new',[
            'cats'=>$cat,
            'partners'=>$partner,
            'styles'=>$style
        ]);
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
        $rule=[
            'name'=>"required",
            'categorie_id'=>"required",
            'style_id'=>"required",
            'partner_id'=>"required",
            'price'=>"required",
            'old_price'=>"required",

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('products.create')->withErrors($validator)->withInput();
        }
        else{

        
        $product=new product_models;
        $product->name=$request->name;
        $product->categorie_id=$request->categorie_id;
        $product->style_id=$request->style_id;
        $product->size=$request->size;
        $product->price=$request->price;
        $product->old_price=$request->old_price;
        $product->viewed=$request->viewed;
        $product->partner_id=$request->partner_id;
        $product->description=$request->description;
        $product->save();
          //upload file 

          $id = $product->id;
          $file=$request->avatar;
          $file->move("./uploads/","$id.jpg");
          
         
        return redirect()->route('products.index');
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
        //
        $product=product_models::findOrFail($id);
        $cat=categorie_models::all();
        $style=style_models::all();
        $partner=partner_models::all();
        return view('product.edit',[
            'products'=>$product,
            'cats'=>$cat,
            'partners'=>$partner,
            'styles'=>$style
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
        //
        $rule=[
            'name'=>"required",
            'categorie_id'=>"required",
            'style_id'=>"required",
            'partner_id'=>"required",
            'price'=>"required",
            'old_price'=>"required",

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('products.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $product= product_models::findOrFail($id);
        $product->name=$request->name;
        $product->categorie_id=$request->categorie_id;
        $product->style_id=$request->style_id;
        $product->size=$request->size;
        $product->price=$request->price;
        $product->old_price=$request->old_price;
        $product->viewed=$request->viewed;
        $product->partner_id=$request->partner_id;
        $product->description=$request->description;
        $product->save();
        $file=$request->avatar;
        $file->move("./uploads/","$id.jpg");
        return redirect()->route('products.index');
        }
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
        $product =product_models::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
    
}
