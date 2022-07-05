<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie_models;
use Illuminate\Support\Facades\Validator;
class CategoriesController extends Controller
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
        $cat =categorie_models ::orderBy('id','desc')->paginate(3);
        return view('category.index',['cats'=>$cat]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.new');
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
            return redirect()->route('category.create')->withErrors($validator)->withInput();
        }
        else{

        
        $cat=new categorie_models;
        $cat->name=$request->name;
        $cat->feature=$request->feature;
        $cat->description=$request->description;
        $cat->save();
         
        return redirect()->route('categories.index');
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
        $cat=categorie_models::findOrFail($id);
        return view('category.edit',['cats'=>$cat]);
        
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
            return redirect()->route('category.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $cat=categorie_models::find($id);
        $cat->name=$request->name;
        $cat->feature=$request->feature;
        $cat->description=$request->description;
        $cat->save();
         
        return redirect()->route('categories.index');
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
        $categories =categorie_models::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
