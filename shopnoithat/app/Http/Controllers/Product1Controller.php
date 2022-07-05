<?php

namespace App\Http\Controllers;
use App\Models\product_models;
use App\Models\style_models;
use App\Models\categorie_models;
use App\Models\partner_models;
use App\Models\comment_models;
use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $pro1=product_models::where('categorie_id','1')->get();
        $pro2=product_models::where('categorie_id','2')->get();
        $pro3=product_models::where('categorie_id','3')->get();
        $pro4=product_models::where('categorie_id','4')->get();
        $pro5=product_models::where('categorie_id','5')->get();
        $categorie=categorie_models::all();
        return view('client.product',
        ['pros1'=>$pro1,
        'pros2'=>$pro2,
        'pros3'=>$pro3,
        'pros4'=>$pro4,
        'pros5'=>$pro5,
        'categories'=>$categorie
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
        $product=product_models::findOrFail($id);
        $pro1=product_models::where('categorie_id',$product->categorie_id)->get();
        $categorie=categorie_models::all();
        $pr =product_models::all();
        $comment=comment_models::all();
        return view('client.product_detail',['products'=>$product,'pros1'=>$pro1,'product'=>$pr,'categories'=>$categorie,'comments'=>$comment,'test'=>$id]);
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
        $pro1=product_models::where('categorie_id',$product->categorie_id)->get();
        $categorie=categorie_models::all();
        $comment=comment_models::all();
        return view('client.product_detail',['products'=>$product,'pros1'=>$pro1,'categories'=>$categorie,'comments'=>$comment]);
        
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
