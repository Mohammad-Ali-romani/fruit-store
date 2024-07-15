<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta_Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
    ];
    public function Product(){
        return $this->belongsTo(Product::class);
      }
}
