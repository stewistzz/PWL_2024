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
    return view('welcome');
});

// praktikum 1 - langkah 2
Route::get('/hello', function () {
    return "Hello World";
});

// praktikum 1 - langkah 4
Route::get('/world', function () {
    return "World";
});

// praktikum 1 - langkah 6 Membuat route ’/’ yang menampilkan pesan ‘Selamat Datang'
Route::get('/', function () {
    return "Selamat Datang";
});

// praktikum 1 - langkah 7 Membuat route ‘/about’ yang akan menampilkan NIM dan nama Anda
Route::get('/about', function () {
    return "(2341760188)_Dimas Setyo Nugroho";
});


/*Route Parameters - praktikum 1 langkah 8 emanggil route /user/{name} 
sekaligus mengirimkan parameter berupa nama user $name */
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

/*
Route Parameters - praktikum 1 langkah 11
Suatu route, juga bisa menerima lebih dari 1 parameter
*/
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


/*
Optional Parameters - praktikum 1 langkah 14
Kita akan memanggil route /user sekaligus mengirimkan parameter berupa nama user
$name dimana parameternya bersifat opsional.
*/
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

/*
Optional Parameters - praktikum 1 langkah 17
Kita akan memanggil route /user sekaligus mengirimkan parameter berupa nama user
$name dimana parameternya bersifat opsional - bagian 2.
*/
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
