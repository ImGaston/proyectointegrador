<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talle extends Model
{
    public function products() {
        return $this->hasMany('App\Product', 'talle_id');
    }
}
