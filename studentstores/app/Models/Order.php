<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $fillable = [
        'user',
        'address_delivery'
    ];
    
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

  

    protected $table = "orders";
}