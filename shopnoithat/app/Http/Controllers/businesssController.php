<?php

namespace App\Http\Controllers;
use App\Models\business_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class businesssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $business=business_models::orderBy('id','desc')->paginate(10);
        return view('business.index',['businesss'=>$business]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('business.new' );
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
            'bank_information'=>"required",
            'phone'=>"required",
            'email'=>"required",
           

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('businesss.create')->withErrors($validator)->withInput();
        }
        else{

        
        $business=new business_models;
        $business->name=$request->name;
        $business->bank_information=$request->bank_information;
        $business->phone=$request->phone;
        $business->email=$request->email;
        $business->website=$request->website;
        $business->fanpage=$request->fanpage;
        $business->description=$request->description;
        $business->save();
    
         
        return redirect()->route('businesss.index');
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
        $business =business_models::findOrFail($id);
        return view('business.edit',['businesss'=>$business]);
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
            'bank_information'=>"required",
            'phone'=>"required",
            'email'=>"required",
           

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('businesss.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $business= business_models::findOrFail($id);
        $business->name=$request->name;
        $business->bank_information=$request->bank_information;
        $business->phone=$request->phone;
        $business->email=$request->email;
        $business->website=$request->website;
        $business->fanpage=$request->fanpage;
        $business->description=$request->description;
        $business->save();
    
         
        return redirect()->route('businesss.index');
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
        $business =business_models::findOrFail($id);
        $business->delete();
        return redirect()->route('businesss.index');
    }
}
