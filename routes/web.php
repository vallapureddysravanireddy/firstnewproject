<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;
//use App\Http\Controllers\OtpController;
use App\Post;
use Illuminate\Http\Request;

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

Route::get('lakshmi/', function () {
    return view('welcome');
});
Route::get('/course', function(){
    return view('courseproject');
});
Route::get('/project', function(){
    return view('layouts/project');
});

Route::get('/home','InsertController@index');
Route::post('/submitForm','InsertController@submitForm');
Route::post('/submitotp','InsertController@submitOtp');
Route::get('/showresult','InsertController@show');
// Route::get('/otp',[Controller::class,'__construct']);
// Route::get('/home','Controller@__construct');

 Route::get('/verifyotp', function(){
     return view('index');
});

//Route::get('/verifyotp',[OtpController::class,'index']);
//Route::get('/getotp','OtpController@mail');


//crud operations
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/details/{id}', 'PostsController@details')->name('posts.details');
Route::get('/posts/add', 'PostsController@add')->name('posts.add');
Route::post('/posts/insert', 'PostsController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'PostsController@update')->name('posts.update');
Route::get('/posts/delete/{id}', 'PostsController@delete')->name('posts.delete');