<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
    protected $fillable = [
        'user_id'
    ];
    
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

  

  

    protected $table = "cart";
}