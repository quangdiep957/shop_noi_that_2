<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_models extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongTo('App\Models\categorie_models');
    }
    public function partner(){
        return $this->belongTo('App\Models\partner_models');
    }
    public function styles(){
        return $this->belongTo('App\Models\style_models');
    }
    public function comments(){
        return $this->hasMany('App\Models\comment_models');
    }
    public function order_detail(){
        return $this->hasMany('App\Models\order_detail_models');
    }
  
}
