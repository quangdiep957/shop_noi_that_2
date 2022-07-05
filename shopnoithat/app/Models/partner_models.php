<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner_models extends Model
{
    use HasFactory;
    public function partner(){
        return $this->hasMany('App\Models\partner_models');
    }
}
