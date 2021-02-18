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

//Praktikum 1
//nomer1
Route::get('/', function () {
    echo "Selamat Datang";
});
//nomer 2
Route::get('/about', function () {
    echo "1941720055 <br>"; 
    echo "Maulana Malik Ibrahim <br>"; 
    echo "TI-2A";
});
//nomer 3
Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID".$id;
});