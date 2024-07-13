<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'city'   ,
        'country',
        'postcode',
        'mobile' ,
        'address',
        'comment',
        'total'  ,
    ];
    public function users(){
        return $this->belongsTo(Users::class);
    }
    public function cart(){
        return $this->hasMany(Carts::class);
    }
}
