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
    return view('welcome');
});

// route basic
Route::get('about', function () {
    return '<h1>Hello</h1>'
        . '<br>Selamat datang di webapp saya'
        . '<br>Laravel, emang keren';
});

Route::get('profile', function () {
    $nama = "Abdul";
    return "Nama Saya adalah <b>$nama</b>";
});

// route parameter
Route::get('post/{id?}', function ($a) {
    return "Halaman Post ke - $a";
});
// buatlah route bernama bio dengan parameter yang isianya
// nama, umur, alamat
Route::get('bio/{nama}/{umur}/{alamat}', function ($a, $b, $c) {
    return "Biodata Saya<br>"
        . "Nama   : $a<br>"
        . "Umur   : $b<br>"
        . "Alamat : $c<br>";
});

// Route Optional Parameter
Route::get('page/{page?}', function ($hal = 1) {
    return "Halaman <b>$hal</b>";
});

// buatlah route "pesan" dengan optional parameter,
// makanan, minuman, cemilan

// param tidak di isi -> anda tidak memesan silahkan pulang
// makanan -> anda pesan makan : .....
// makanan & minuman -> anda pesan makan : ... minum: ...
// makanan & minuman & cemilan ->
// anda pesan makan : ... minum: ... cemilan : ....
