<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Info extends Model
{
    use HasFactory;
    protected   $fillable = [
        'location',
        'email'   ,
        'phone'   ,
        'address' ,
        'facebook',
        'twitter' ,
        'linkedin',
        'telegram',
        'about_as',
        'about_as',
    ];
}
