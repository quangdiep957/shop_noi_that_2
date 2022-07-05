<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie_models extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany('App\Models\product_models');
    }
}
