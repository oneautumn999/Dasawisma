<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KEMATIAN extends Model
{
    use HasFactory;
    protected $table = "kematian";
    protected $guarded = [];

    public function users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
  
}
