<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $guarded = [];


    protected $fillable = [
       'username', 'name', 'email', 'type' ,'company', 'startdate', 'country',
        'photo',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'user_product');
    }

}
