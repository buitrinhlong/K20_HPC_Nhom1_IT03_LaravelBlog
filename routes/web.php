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

Route::get('/trinhlong', function() {
    return 'Bùi Trịnh Long k20-it03';
});

Route::get('/long', function() {
    return view('blog');
});

Route::get('/blog-post', function() {
    return view('blog-post');
});
 
Route::get('/dangnhap', function() {
    return view('login');
});

Route::get('/dangky', function() {
    return view('register');
});

Route::get('/home', function() {
    return 'dây là trang quản trị';
})->middleware('abc');
