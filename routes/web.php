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

Route::get('/', 'App\Http\Controllers\PagesController@listAllPosts');
Route::get('post/{id}', 'App\Http\Controllers\PagesController@showPost');
Route::get('edit/{id}', 'App\Http\Controllers\PagesController@showEditPost');
Route::get('permissions', 'App\Http\Controllers\PagesController@listAllUsers');
Route::post('permissions', 'App\Http\Controllers\AuthController@grant')->name('grant');

Route::get('login', function() {
    return view('login');
})->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('register', function() {
    return view('register');
})->name('register');

Route::post('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('edit/{id}', 'App\Http\Controllers\BlogController@edit')->name('edit');
//Route::post('edit/{id}', 'App\Http\Controllers\BlogController@remove')->name('remove');

Route::get('dash', function() {
    return view('dash');
});

Route::get('dash', 'App\Http\Controllers\PagesController@showPost');
Route::get('logout', 'App\Http\Controllers\AuthController@logout');
Route::get('new', 'App\Http\Controllers\BlogController@new');