<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'value',
    ];
    public function product(){
        return $this->belongsTo(Producte::class);
    }
}
