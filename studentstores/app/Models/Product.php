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

    //Establecer relacion muchos a muchos entre Orden y Producto
    public function order() {
        return $this->belongsToMany('App\Models\Order');
    }

    protected $table = "products";
}