<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'level',
        'job_id'
    ];
    
    

    public function job() {
        return $this->belongsTo('App\Models\Job');
    }

    protected $table = "players";
}
