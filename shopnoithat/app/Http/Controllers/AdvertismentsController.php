<?php

namespace App\Http\Controllers;
use App\Models\advertisment_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdvertismentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisment =advertisment_models::orderby('id','desc')->paginate(10);
        return view('advertisment.index',['advertisments'=>$advertisment]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisment.new');

        
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
            'content'=>"required",
            
        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('advertisments.create')->withErrors($validator)->withInput();
        }
        else{

        
        $advertisment=new advertisment_models;
        $advertisment->content=$request->content;
        $advertisment->starttime=$request->starttime;
        $advertisment->endtime=$request->endtime;
        $advertisment->description=$request->description;
        $advertisment->save();
          //upload file 
        return redirect()->route('advertisments.index');
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
        $advertisment=advertisment_models::findOrBy($id);
        return view('advertisment.edit',['advertisments'=>$advertisment]);

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
            'content'=>"required",
            
        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('advertisments.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $advertisment=advertisment_models::findOrBy($id);
        $advertisment->content=$request->content;
        $advertisment->starttime=$request->starttime;
        $advertisment->endtime=$request->endtime;
        $advertisment->description=$request->description;
        $advertisment->save();
          //upload file 
        return redirect()->route('advertisments.index');
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
        $advertisment=advertisment_models::findOrBy($id);
        $advertisment->delete();
        return redirect()->route('advertisments.index');
    }
}
