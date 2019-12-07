<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carritos extends Model
{
    public function products() {
      return $this->hasMany('App\Product', 'product_id');
    }

    public function users() {
        return $this->belongsTo('App\Users', 'user_id');
    }
  

}
