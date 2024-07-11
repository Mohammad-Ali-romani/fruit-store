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
        'mobile' ,
        'address',
        'comment',
        'total'  ,
    ];
}
