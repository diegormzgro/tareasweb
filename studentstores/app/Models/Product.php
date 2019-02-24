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

    public function collection() {
        return $this->belongsTo('App\Models\Collection');
    }

    protected $table = "products";
}