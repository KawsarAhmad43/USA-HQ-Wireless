<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_categories extends Model
{
    protected $fillable = [
      'product_id',
      'category_id'
    ];
}
