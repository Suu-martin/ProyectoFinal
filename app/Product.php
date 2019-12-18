<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";


    public $guarded = [];
    public function brand()
    {
      return $this->belongsTo(Brand::class, 'brand_id');
    }
}
