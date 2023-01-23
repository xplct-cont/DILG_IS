<?php

use Carbon\Carbon;

//Normal View
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_View\NewsController;
use App\Http\Controllers\Normal_View\Jobs\JobsController;
use App\Http\Controllers\Admin_View\layouts\HomeController;

//Admin View
use App\Http\Controllers\Normal_View\About\AboutController;
use App\Http\Controllers\Normal_View\Contacts\ContactsController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');



//Routes for Kenn
 









//Routes for Chadie



Route::get('/news-update',function(){
    return view('Normal_View.News.news');
});
Route::get("/sigle-news-update",function(){
    return view('Normal_View.News.single_news');
});

Route::get("/project",function(){
    return view('Normal_View.Projects.project');
});




//Routes for Vienna
Route::get('/about', [AboutController::class, 'index']);
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/admin/news', [NewsController::class, 'index']);









//Routes for Franklin
Route::get('/organizations',function(){
    return view('Normal_View.Organization.organization');
});










//End here


