<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    protected $fillable = [
        'name',
        'description'
    ];
    
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    protected $table = "collections";
}