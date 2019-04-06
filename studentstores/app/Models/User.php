<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function carts() {
        return $this->hasMany('App\Models\Cart');
    }

    protected $table = "users";
}