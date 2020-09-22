<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home.index');
});
// Route::get('/aboout', function () { return view('home.about');});
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

// Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('index', 'HomeController@index')->name('index');
Route::get('about', 'HomeController@about');
Route::get('/blog', 'HomeController@blog');
Route::get('/blogdetail', 'HomeController@blogdetail');
Route::get('/contact', 'HomeController@contact');
Route::get('/hotel', 'HomeController@hotel');
Route::get('/hoteldetail', 'HomeController@hoteldetail');
Route::get('/tour', 'HomeController@tour');



Route::resource('products', ProductController::class);

Auth::routes();
// Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'],function () {
    Route::get('/', 'AdminController@index')->name('admin');
    
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    // Route::get('/addproduct', 'AdminController@addproduct')->name('addproduct');
    Route::get('/index', 'AdminController@dashboard')->name('dashboard');

});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
