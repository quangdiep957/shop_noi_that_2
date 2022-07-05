<?php

namespace App\Http\Controllers;
use App\Models\partner_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partner=partner_models::orderBy('id','desc')->paginate(10);
        return view('partner.index',['partners'=>$partner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('partner.new');
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
            'phone'=>"required",
            'email'=>"required"

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('partners.create')->withErrors($validator)->withInput();
        }
        else{

        
        $partner=new partner_models;
        $partner->name=$request->name;
        $partner->phone=$request->phone;
        $partner->email=$request->email;
        $partner->website=$request->website;
        $partner->description=$request->description;
        $partner->save();
         
        return redirect()->route('partners.index');
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
        $partner=partner_models::findOrFail($id);
        return view('partner.edit',['partners'=>$partner]);
        
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
            'phone'=>"required",
            'email'=>"required"

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('partners.edit')->withErrors($validator)->withInput();
        }
        else{

        
        $partner=partner_models::find($id);
        $partner->name=$request->name;
        $partner->phone=$request->phone;
        $partner->email=$request->email;
        $partner->website=$request->website;
        $partner->description=$request->description;
        $partner->save();
        return redirect()->route('partners.index');
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
        $partner=partner_models::findOrFail($id);
        $partner->delete();
        return redirect()->route('partners.index');
    }
}
