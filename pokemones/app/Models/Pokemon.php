<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model {
    protected $fillable = [
        'name',
        'category',
        'type'
    ];  

    protected $table = "pokemons";
}