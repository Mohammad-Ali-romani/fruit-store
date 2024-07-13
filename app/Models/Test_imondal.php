<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test_imondal extends Model
{
    use HasFactory;
    protected   $fillable = [
        'user_id'   ,
        'comment'   ,
        'evaluation',
    ];
    public function users(){
        return $this->belongsTo(Users::class);
    }
}
