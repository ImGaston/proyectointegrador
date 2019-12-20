<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function productosComprados()
    {
        return $this->hasMany('App\Compra', 'compra_id');
    }
}
