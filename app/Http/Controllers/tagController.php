<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;

class tagController extends Controller
{
    public function index(){
        return view("tags", [
            "tags" => tag::all()
        ]);
    }
    public function show(tag $tag){
        return view("tag", [
            "tag" => $tag,
        ]);
    }
}
