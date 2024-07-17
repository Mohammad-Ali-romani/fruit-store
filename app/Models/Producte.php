<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'price',
        'image',
        'category_id',
        'meta_id',
        'content',
        'quantity',
        'evaluation',
        'old_price',
    ];
    public function category(){
      return $this->belongsTo(Category::class);
    }
    public function Meta(){
      return $this->hasMany(Meta::class);
  }
    public function product_tags(){
      return $this->hasMany(Product_Tags::class);
  }
    public function reviews(){
      return $this->hasMany(Reviews::class);
    }
    public function cart(){
      return $this->belongsTo(Carts::class);
    }
}
