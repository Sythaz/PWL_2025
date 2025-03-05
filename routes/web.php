<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'Selamat Datang';
});

Route::get('/hello', function () {
return 'Hello World';
});

Route::get('/world', function () {
return 'World';
});

Route::get('/about', function () {
return '2341720102';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function($postId) {
    return 'Halaman Artikel dengan ID '. $postId ;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '. $name;
});
