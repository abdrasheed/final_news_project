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
Route::get('login', 'auth_controller@login')->name('login');
Route::post('authenticate', 'auth_controller@authen')->name('authenticate');
Route::get('logout', 'auth_controller@log_out')->name('logout');
Route::namespace('dashboard')->middleware('auth')->name('dashboard.')->prefix('dashboard')->group(function (){

    Route::get('/','dashboard_controller@dashboard');
    Route::resource('news','news_controller_admin');
});


Route::get('/', 'frontsite_controller@show_home')->name('frontsite.home');
Route::get('/news/{id}', 'frontsite_controller@show_single_news')->name('frontsite.single_news');
Route::get('/contact', 'frontsite_controller@show_contact')->name('frontsite.contact');
//Route::view('/{id}', 'frontsite_controller\posts_controller@phone');

