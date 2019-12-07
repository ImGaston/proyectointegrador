<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    public function products() {
        return $this->hasMany('App\Product', 'prenda_id');
    }
}
