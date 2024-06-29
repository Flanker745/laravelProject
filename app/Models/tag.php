<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    public function jobs(){
        return $this -> belongsToMany(job::class , table:"job_tags" , relatedPivotKey:"jobs_listing_id");
    }
    public function posts(){
        return $this -> belongsToMany(post::class , table:"post_tags");
    }
}
