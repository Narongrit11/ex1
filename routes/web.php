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

// Route::get('/user/{name}', function ($name) {
//     return "สวัสดี $name";
// });

// Route::get("/บวกเลข/{num1}/{num2}", function ($num1, $num2) {
//     return $num1 + $num2;
// });

// Route::get('/showdetail/{name1}/{num1}/{name2}', function ($name1,$num1,$name2) {
//     return "สวัสดี, $name1 คุณอายุ $num1 ปี และคุณพูดว่า '$name2'" ;
// });

Route::get('/', 'HomeController@index');
Route::get('/greeting/{name}', 'HomeController@greeting');
Route::get("/calculator/{num1}/{num2}/{num3}", 'HomeController@calculator');
Route::get('/user', 'userController@index');
Route::get('/user/show/{id}', 'userController@show');
Route::get('/user/show/update/{id}', 'userController@update');
