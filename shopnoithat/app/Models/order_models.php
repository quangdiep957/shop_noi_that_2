<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_models extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongTo('App\Models\customer_models');
    }
}
