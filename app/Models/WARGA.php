<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WARGA extends Model
{
    use HasFactory;
    protected $table = "warga";
    protected $guarded = [];

    public function rt()
    {
        return $this->hasOne(RT::class,'id','user_id');
    }
    
}
