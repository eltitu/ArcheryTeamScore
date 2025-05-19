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

Route::get('/', function () {
    return view('home');
});

Route::get('/arqueros', function () {
    return view('arqueros');
});

Route::get('/competiciones', function () {
    return view('competiciones');
});

Route::get('/nueva-competicion', function () {
    return view('nueva-competicion');
});