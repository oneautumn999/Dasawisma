<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;
    protected $table = "keluarga";
    protected $guarded = [];

    public function rt()
    {
        return $this->hasOne(RT::class,'id','user_id');
    }
    
}
