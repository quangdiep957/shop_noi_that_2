<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\style_models;
use Illuminate\Support\Facades\Validator;
class StylesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $style = style_models::orderBy('id','desc')->paginate(10);
        return view('style.index',['styles'=>$style]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('style.new');
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
            'name'=>"required"

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('styles.create')->withErrors($validator)->withInput();
        }
        else{

        
        $style=new style_models;
        $style->name=$request->name;
        $style->description=$request->description;
        $style->save();
         
        return redirect()->route('styles.index');
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
        $style=style_models::findOrFail($id);
        return view('style.edit',['styles'=>$style]);
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
            'name'=>"required"

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('styles.create')->withErrors($validator)->withInput();
        }
        else{

        
        $style= style_models::findOrFail($id);
        $style->name=$request->name;
        $style->description=$request->description;
        $style->save();
         
        return redirect()->route('styles.index');
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
        $style =style_models::findOrFail($id);
        $style->delete();
        return redirect()->route('styles.index');

    }
}
