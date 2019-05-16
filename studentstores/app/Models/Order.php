<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $fillable = [
        
        'status',
        'total'
    ];
    
    

  

    protected $table = "order";
}