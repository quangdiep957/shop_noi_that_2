<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_models extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongTo('App\Models\product_models');
    }
    public function customer(){
        return $this->belongTo('App\Models\customer_models');
    }
}
