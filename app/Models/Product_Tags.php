<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Tags extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'tags_id',
    ];
    public function Product(){
        return $this->belongsTo(Producte::class);
      }
      public function Tags(){
        return $this->belongsTo(Tags::class);
      }
}
