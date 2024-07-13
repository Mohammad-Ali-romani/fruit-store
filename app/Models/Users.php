<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected   $fillable = [ 
        'name'    ,
        'email'   ,
        'password',
        'is_admin',
    ];
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }
    public function test(){
        return $this->hasMany(Test_imondal::class);
    }
    public function order(){
        return $this->hasMany(Orders::class);
    }
}
