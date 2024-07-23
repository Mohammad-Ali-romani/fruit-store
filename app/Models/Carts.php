<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'total',
        'order_id',
        'producte_id',
    ];
    public function order(){
        return $this->belongsTo(Orders::class);
    }
    public function product(){
        return $this->hasMany(Producte::class);
    }
}
