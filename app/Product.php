<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'pcode',
      'title',
      'slug',
      'short_description',
      'long_description',
      'rprice',
      'sprice',
      'video',
      'img1',
      'img2',
      'img3',
      'img4',
      'pdate',
      'status',
      'sts'
    ];


    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
    
}
