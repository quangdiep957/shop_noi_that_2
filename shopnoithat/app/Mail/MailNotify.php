<?php

namespace App\Mail;
use App\Models\order_models;
use App\Models\order_detail_models;
use App\Models\customer_models;
use App\Models\product_models;
use App\Models\categorie_models;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
   use Queueable, SerializesModels;

   /**
    * Create a new data instance.
    *
    * @return void
    */

   public function __construct()
   {

   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
   $order = order_models::orderBy('id','desc')->take(1)->get();
    $carts=session()->get(key:'cart');
   $user=session()->get(key:'user');
    // foreach($carts as $cart)  
    // {
    //     //dd($cart['name']);
    // }
    
    return $this->from("quangdiep957@gmail.com")->view('mails.sendmail',['carts'=>$carts,'orders'=>$order,'users'=>$user]);
   }
}
