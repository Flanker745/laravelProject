<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class job extends Model
{
    use HasFactory;
    protected $table = "jobs_listings";
protected $fillable = ['title', 'salary' , 'staffs_id'];

    public  function staffs()
    {
        return $this->belongsTo(staffs::class);
    }
    public function tags(){
        return $this -> belongsToMany(tag::class , table:"job_tags" , foreignPivotKey:"jobs_listing_id");
    }
    
   

};
