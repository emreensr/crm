<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $guarded = [];


    protected $fillable = [
       'username', 'name', 'email', 'status', 'role', 'company', 'age', 'mobile',
        'position', 'office', 'startdate', 'website', 'gender', 'address', 'city', 'state', 'country', 'twitter','facebook','instagram'
    ];
}
