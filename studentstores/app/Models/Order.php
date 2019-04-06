<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $fillable = [
        
        'address_delivery'
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

  

    protected $table = "orders";
}