<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable =[
        'content',
        'user_id',
        'product_id',
        'evaluation',
    ];
    public function users(){
        return $this->belongsTo(Users::class);
    }
    public function product(){
        return $this->belongsTo(Producte::class);
    }
}
