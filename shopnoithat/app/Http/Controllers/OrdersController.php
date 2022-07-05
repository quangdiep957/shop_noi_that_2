<?php

namespace App\Http\Controllers;
use App\Models\order_models;
use App\Models\order_detail_models;
use App\Models\customer_models;
use App\Models\product_models;
use App\Models\categorie_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Validator;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $product= product_models::all();
        $categories= categorie_models::all();
        //$order = order_models::orderBy('id','desc')->paginate(10);
        $cart=session()->get(key:'cart');
      //  dd ($cart);
       // session()->forget(key:'cart');
        return view('client.cart',['carts'=>$cart,'products'=>$product,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
      
        
    }
    public function AddToCart($id)
    {
       //echo("Hello");
        $product= product_models::findOrFail($id);
        $categories= categorie_models::all();
         $pro =product_models::orderBy('id','desc')->take(4)->get();
        $cart = session()->get('cart'); 
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "id" => $product->id,
                        
                      
                    ]
            ];
   
            session()->put('cart', $cart);
            
            return view('client.cart',['carts'=>$cart,'products'=>$pro,'categories'=>$categories]);
        }
   
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
   
            $cart[$id]['quantity']++;
   
            session()->put('cart', $cart); // this code put product of choose in cart
            return view('client.cart',['carts'=>$cart,'products'=>$pro,'categories'=>$categories]);
   
        }
   
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [

            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "id" => $product->id
        ];
   
        session()->put('cart', $cart); // this code put product of choose in cart
   
      //  return redirect()->back()->with('success', 'Product added to cart successfully!');
      return view('client.cart',['carts'=>$cart,'products'=>$pro,'categories'=>$categories]);
    }
  
    
    public function update(Request $request)
    {
        $categories= categorie_models::all();
       $pro =product_models::orderBy('id','desc')->take(4)->get();
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
   
            $cart[$request->id]["quantity"] = $request->quantity;
   
            session()->put('cart', $cart);
   
            session()->flash('success', 'Cart updated successfully');
            return view('client.cart',['carts'=>$cart,'products'=>$pro,'categories'=>$categories]);
        }
    }
   
    // delete or remove product of choose in cart
    public function remove(Request $request)
    {
        $categories= categorie_models::all();
          $pro =product_models::orderBy('id','desc')->take(4)->get();
        if($request->id) {
   
            $cart = session()->get('cart');
   
            if(isset($cart[$request->id])) {
   
                unset($cart[$request->id]);
   
                session()->put('cart', $cart);
            }
   
            session()->flash('success', 'Product removed successfully');
            return view('client.cart',['carts'=>$cart,'products'=>$pro,'categories'=>$categories]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
   
            $cart[$request->id]["quantity"] = $request->quantity;
   
            session()->put('cart', $cart);
   
            session()->flash('success', 'Cart updated successfully');
            return view('client.cart',['carts'=>$cart]);
        }
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $order= order_models::findOrFail($id);
        return view('order.edit',['customers'=>$customer,'orders'=>$order]);
    }
    public function createCart(Request $request)
    {
        
        $rule=[
            'name'=>"required",
            'email'=>"required",
            'phone'=>"required",
            'address'=>"required",
            'price'=>"required",
            'quantity'=>"required",
            

        ];
        
        
        $order = new order_models;
       
        $order->customer_id=$request->customer_id;
        $order->order_date=$request->date;
        $order->sum_price=$request->tongtien;
        $order->sum_quantity=$request->tongsl;
        $order->status =0;
        $order->save();
        $cart=session()->get(key:'cart');
        //
        foreach($cart as $c)
        {
            $order_detail = new order_detail_models;
            $order_detail->order_id=$order->id;
            $order_detail->quantity=$c['quantity'];
            $order_detail->product_id=$c['id'];
        }
        $order_detail->save();
        //Session::forget('cart');
        return redirect()->action([OrdersController::class, 'sendEmail']);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $order=order_models::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
    public function sendEmail() {
        $user=session()->get(key:'user');
        $to_email = $user['email'];

        Mail::to($to_email)->send(new MailNotify);

        return "<p> Thành công! Email của bạn đã được gửi</p>";

    }
    public function confirm($id,$status)
    {
        $order= order_models::findOrFail($id);
        $order->status=$status;
        $order->save();
        \Session::forget('cart');
        return redirect()->action([Home_Controller::class, 'index']);
    }
}
