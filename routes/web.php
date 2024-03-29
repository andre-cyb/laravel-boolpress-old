<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();


//Route::get('/home', 'Admin\HomeController@index')->name('admin.home');



route::namespace("Admin")
->middleware("auth")
->prefix("admin")
->name("admin.")
->group(function() {

Route::get('/', 'HomeController@index')->name('home');
Route::resource("posts", "PostController");

});

Route::get("{any?}", function() {
    return view("guests.welcome");
  })->where("any", ".*");
