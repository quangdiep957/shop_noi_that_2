<?php

namespace App\Http\Controllers;
use App\Models\Acessmodel;
use Illuminate\Http\Request;
use App\Models\categorie_models;
use App\Models\product_models;
use Carbon\Carbon;
class Home_Controller extends Controller
{
    //
    public function index(Request $request){
        $user=session()->get(key:'user');
        $acess=new Acessmodel;
        $acess->ip=$request->ip();
        $acess->status=1;
        $acess->save();
        $dt=Carbon::now(); // 2018-10-18 21:15:43
        $dt->toTimeString();    
        Carbon::parse($dt) ->addSeconds(-120) ->format('H:i:s');
        $acess_update=Acessmodel::where('created_at','<',$dt)->get();
        if($acess_update!=null)
        {
            foreach($acess_update as $a)
            {
             $a->status=0;
             $a->save();
            }
        }
        $productsale =product_models::orderBy('id','asc')->take(5)->get();
        $productnew =product_models::orderBy('id','desc')->take(5)->get();
        $productview =product_models::where('viewed', '>', 300)->take(5)->get();
        $categorie =categorie_models::all();
        return view('Client.home',
        ['productsale'=>$productsale,
        'productnew'=>$productnew,
        'productview'=>$productview,
        'user'=>$user,
        'categories'=>$categorie]);
    } 
    
}
