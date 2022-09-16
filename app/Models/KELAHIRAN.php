<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KELAHIRAN extends Model
{
    use HasFactory;
    protected $table = "kelahiran";
    protected $guarded = [];

    // public function users()
    // {
    //     return $this->hasOne(User::class,'id','user_id');
    // }
  
}
