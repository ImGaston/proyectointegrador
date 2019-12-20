<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class Carritos extends Model
{
  public function product()
  {
    return $this->hasMany('App\Product', 'product_id');
  }

  public function user()
  {
    return $this->belongsto('App\User', 'user_id');
  }

  

}
