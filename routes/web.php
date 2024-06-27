<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get("/register", [registerController::class, "create"]);
Route::POST("/register", [registerController::class, "store"]);


Route::get("/login", [loginController::class, "create"])->name('login');
Route::POST("/login", [loginController::class, "store"]);
Route::POST("/logout", [loginController::class, "destroy"]);



Route::view("/", "home");
Route::view("/hash", "hash");


Route::view("/about", "about");

Route::controller(jobController::class)->group(function () {
    Route::get('/jobs',  "index");
    Route::get('/jobCreate',  "create")->middleware("auth");
    Route::post('/jobs',  "add");
    Route::get('/jobs/{job}',  "show");
    Route::get('/jobs/{job}/update',  "updatePage")->middleware("auth")->can("edit-job", "job");
    Route::patch('/jobs/{job}',  "update")->middleware("auth")->can("edit-job", "job");
    Route::delete('/jobs/{job}',  "delete")->middleware("auth")->can("edit-job", "job");
});

Route::get('/post', [postController::class, "index"]);
Route::get("/post/{post}", [postController::class, "show"]);

Route::get('/tag', [tagController::class, "index"]);
Route::get("/tag/{tag}", [tagController::class, "show"]);

Route::view("/users", "users");

Route::view("/contact", "contact");
