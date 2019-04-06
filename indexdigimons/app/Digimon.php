<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Digimon extends Model
{
    protected $fillable = [
        'name',
        'type',
        'level',
    ]; 


    protected $table = "digimons";
}
