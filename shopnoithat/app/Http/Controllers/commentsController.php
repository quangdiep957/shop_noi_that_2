<?php

namespace App\Http\Controllers;
use App\Models\comment_models;
use App\Models\customer_models;
use App\Models\product_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comment=comment_models::orderBy('id','desc')->paginate(10);
        return view('comment.index',['comments'=>$comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customer =customer_models::all();
        $product =product_models::all();
        return view('comment.new',['customers'=>$customer,'products'=>$product]);
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
            'product_id'=>"required",
            'customer_id'=>"required",
            'comment'=>"required",
           

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('comments.create')->withErrors($validator)->withInput();
        }
        else{

        
        $comment=new comment_models;
        $comment->customer_id=$request->customer_id;
        $comment->product_id=$request->product_id;
        $comment->rating=$request->rating;
        $comment->comment=$request->comment;
        $comment->commented_date=$request->commented_date;
        
        $comment->save();
       
        return redirect()->route('comments.index');
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
        $comment=comment_models::findOrFail($id);
        $customer =customer_models::all();
        $product =product_models::all();
        return view('comment.new',['customers'=>$customer,'products'=>$product,'comments'=>$comment]);
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
            'product_id'=>"required",
            'customer_id'=>"required",
            'comment'=>"required",
           

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('comments.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $comment=comment_models::findOrFail($id);
        $comment->customer_id=$request->customer_id;
        $comment->product_id=$request->product_id;
        $comment->rating=$request->rating;
        $comment->comment=$request->comment;
        $comment->commented_date=$request->commented_date;
        
        $comment->save();
       
        return redirect()->route('comments.index');
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
        $comment=comment_models::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
