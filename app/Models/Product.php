<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'price',
        'image',
        'category_id',
        'meta_id'
    ];
    public function category(){
      return $this->belongsTo(Category::class);
    }
    public function Meta_Product(){
      return $this->hasMany(Meta_Product::class);
  }
    public function Product_Tags(){
      return $this->hasMany(Product_Tags::class);
  }
}
