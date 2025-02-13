<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    use HasFactory;
    public function job()
    {
        return $this->hasMany(job::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
