<?php

use Illuminate\Support\Facades\Route;

$p = 'App\Http\Controllers';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get("/", "$p\BlogController@blogs")->name("blogs");

Route::get("/blogs/{blog}", "$p\BlogController@viewBlog")->name("blog");

Route::get("/logout", function() {
     Auth::logout();
     return redirect('/');
})->middleware("auth")->name("logout");


Route::get("/create", function() {  return view("create");  })->name("blog.create")->middleware("auth");

Route::post("/", "$p\BlogController@store");
