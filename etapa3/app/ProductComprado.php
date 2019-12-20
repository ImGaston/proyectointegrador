<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductComprado extends Model
{
    public $table = 'compras_products';
    public $primaryKey = ['compra_id', 'product_id'];
    public $incrementing = false;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    protected function setKeysForSaveQuery(Builder $query)
    {
        return $query->where('compra_id', $this->getAttribute('compra_id'))
            ->where('product_id', $this->getAttribute('product_id'));
    }
}
