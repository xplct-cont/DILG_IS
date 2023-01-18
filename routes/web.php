<?php

use Carbon\Carbon;
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

Route::get('/', function () {
    return view('/Normal_View/Home/home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Routes for Kenn










//Routes for Chadie



Route::get('/news-update',function(){
    return view('Normal_View.News.news');
});
Route::get("/sigle-news-update",function(){
    return view('Normal_View.News.single_news');
});





//Routes for Vienna










//Routes for Franklin











//End here


