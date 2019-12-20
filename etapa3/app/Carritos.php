<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class Carritos extends Model
{
  public $table = 'carritos';
  public $primaryKey = ['product_id', 'user_id'];
  public $incrementing = false;
  
  
  public function user() {
    return $this->belongsto('App\User');
  }
  
  public function product() {
  return $this->hasMany('App\Product');
  }

  protected function setKeysForSaveQuery(Builder $query)
  {
    return $query->where('user_id', $this->getAttribute('user_id'))
      ->where('product_id', $this->getAttribute('product_id'));
  }
  

}
