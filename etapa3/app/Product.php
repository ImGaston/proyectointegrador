<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function talle() {
        return $this->belongsTo('App\Talle', 'talle_id');
    }

    public function Prenda() {
        return $this->belongsTo('App\Prenda', 'prenda_id');
    }

    public function Carritos() {
        return $this->hasMany('App\Carritos', 'product_id');
    }
}
