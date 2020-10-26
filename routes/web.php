<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/login","login");

Route::post("/login", "UserController@login");
Route::get("/logout", "UserController@logout");
Route::get("/", "ProductController@index");
Route::get("/product/{term}", "ProductController@show")->name('product');
Route::get("/search", "ProductController@search");
Route::post("/cart", "ProductController@AddToCart");