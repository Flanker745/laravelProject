<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;
use App\Models\post;
use App\Models\tag;
Route::get('/', function () {

    return view('home');
});
Route::get('/about', function () {
    return view("about");
});
Route::get('/jobs', function () {
    $jobs = job::with("staffs")->paginate(3);
    return view("jobs.index", [
        "jobs" => $jobs
    ]);
});
Route::get('/jobCreate', function () {
    
    return view("jobs.create");
});
Route::post('/jobs', function () {
    job::create([
        "title"=>request("title"),
        "salary"=>request("salary"),
        "staffs_id"=>1
    ]);
    return redirect("/jobs");
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);

    return view("jobs.show", [
        "job" => $job
    ]);
});
Route::get('/post', function () {
    return view("posts",[
        "posts"=>post::all()
    ]);
});
Route::get("/post/{id}" , function($id){
    return view("post",[
        "post"=>post::find($id),
    ]);
});
Route::get('/tag', function () {
    return view("tags",[
        "tags"=>tag::all()
    ]);
});
Route::get("/tag/{id}" , function($id){
    return view("tag",[
        "tag"=>tag::find($id),
    ]);
});
Route::get('/users', function () {
    return view("users");
});
Route::get('/contact', function () {
    return view("contact");
});
