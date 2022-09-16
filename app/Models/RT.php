<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;
    protected $table = "tbl_rt";
    protected $guarded = [];

    // public function users()
    // {
    //     return $this->hasOne(User::class,'id','user_id');
    // }
  
}
