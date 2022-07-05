<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_models extends Model
{
    use HasFactory;
    public function customer(){
        return $this->hasMany('App\Models\comment_models');
    }
    public function order(){
        return $this->hasMany('App\Models\order_models');
    }
}
