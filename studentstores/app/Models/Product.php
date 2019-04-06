<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'collection_id'
    ]; 

    public function collections() {
        return $this->belongsToMany('App\Models\Collection');
    }

    public function cart() {
        return $this->belongsToMany('App\Models\Cart');
    }

    protected $table = "products";
}