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

Route::get('/', function () {
    return view('frontend/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/',['middleware' => 'auth','uses' => 'frontendcontroller@index_home']);

Route::get('/dashboard',['middleware' => 'auth','uses' => 'DashboardController@index']);
Route::get('/dashboard/details',['middleware' => 'auth','uses' => 'DashboardController@details']);
Route::get('/dashboard/messages',['middleware' => 'auth','uses' => 'DashboardController@messages']);
Route::get('/dashboard/invoices',['middleware' => 'auth','uses' => 'DashboardController@invoices']);
Route::get('/dashboard/favorites',['middleware' => 'auth','uses' => 'DashboardController@favorites']);

Route::post('/dashboard/details',['middleware' => 'auth','uses' => 'UserController@update_details'])->name('detail.update');
Route::post('/dashboard/details/username',['middleware' => 'auth','uses' => 'UserController@update_username'])->name('username.update');
Route::post('/dashboard/details/image',['middleware' => 'auth','uses' => 'UserController@update_image'])->name('image.update');
Route::post('/dashboard/details/password',['middleware' => 'auth','uses' => 'UserController@ChangePassword'])->name('changepassword');