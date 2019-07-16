<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function products()
    {
        return $this -> hasMany('App\Product');
    }

    public function product()
    {
        return $this -> belongsTo('App\Cart');
    }
}
