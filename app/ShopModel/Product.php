<?php

namespace App\ShopModel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name', 'category_id', 'product_detail', 'number_product', 'product_price', 'product_pic'];
    public function category()
    {
        return $this->belongsTo('App\ShopModel\Category', 'category_id');
    }
}
