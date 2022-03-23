<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'location',
        'img',
        'phone',
        'address',
        'bkash',
        'description',
        'isActive',
        'createdBy',
    ];

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function scopeFound($query,$id)
    {
        return $query->where('id', $id);
    }




}
