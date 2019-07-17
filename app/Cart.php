<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    public function user()
    {
        return $this -> belongsTo('App\User');
    }

    public function products()
    {
        return $this -> hasMany('App\Product');
    }
}
