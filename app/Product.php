<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';



    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'user_product');
    }
}
