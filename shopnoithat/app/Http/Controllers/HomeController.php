<?php

namespace App\Http\Controllers;
use App\Models\order_models;
use App\Models\order_detail_models;
use App\Models\customer_models;
use App\Models\product_models;
use App\Models\categorie_models;
use App\Models\Acessmodel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sum_access = 0;
        $sum_access_online = 0;
        $sum_order=0;
        $access =Acessmodel::all();
        foreach ($access as $a)
        {
            $sum_access++;
        }
        $access_online=Acessmodel::where('status','=','1')->get();
        foreach ($access_online as $a)
        {
            $sum_access_online++;
        }
        
        $orders=order_models::where("status",'=',1)->get();
        $orders_cho=order_models::where("status",'=',0)->get();
        foreach ($orders_cho as $o)
        {
            $sum_order++;
        }
        $arr=[];
        foreach ($orders as $order)
        {
          
            $item=
            [
               
                'name'=> $customer=customer_models::findOrFail($order->customer_id)->fullname,
                'phone'=>$customer=customer_models::findOrFail($order->customer_id)->phone,
                'email'=>$customer=customer_models::findOrFail($order->customer_id)->email,
                'address'=>$customer=customer_models::findOrFail($order->customer_id)->address,
                'customer_id'=>$order->customer_id,
                'sum_quantity'=>$order->sum_quantity,
                'sum_price'=>$order->sum_price
    
            ];
            array_push($arr, $item);
        }
        $arr1=[];
        foreach ($orders_cho as $order)
        {
          
            $item=
            [
               
                'name'=> $customer=customer_models::findOrFail($order->customer_id)->fullname,
                'phone'=>$customer=customer_models::findOrFail($order->customer_id)->phone,
                'email'=>$customer=customer_models::findOrFail($order->customer_id)->email,
                'address'=>$customer=customer_models::findOrFail($order->customer_id)->address,
                'customer_id'=>$order->customer_id,
                'sum_quantity'=>$order->sum_quantity,
                'sum_price'=>$order->sum_price
    
            ];
            array_push($arr1, $item);
        }
        return view('home',['orders'=>$arr,'orders_cho'=>$arr1,'sum_access'=>$sum_access,'sum_access_online'=>$sum_access_online,'sum_order'=>$sum_order]);
    
    }
    public function search($id)
    {
        $customer=customer_models::findOrFail($id);
        return $customer;
    }
  
}
