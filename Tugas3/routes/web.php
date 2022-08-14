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

Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('beranda.base1');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/template', function () {
    return view('template.base');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/supplier', function () {
    return view('supplier');
});

