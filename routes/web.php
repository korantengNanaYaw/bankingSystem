<?php

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('EbankingLogin/',['uses' => 'EbankingController@Login']);
Route::post('EbankingRegister/',['uses' => 'EbankingController@Register']);
Route::get('verifyLoginCode/{code}',['uses' => 'EbankingController@verifyCode']);
Route::get('dashboard/', function () {
    return view('dashboard');
});
Route::get('resendPin/',['uses' => 'EbankingController@resendPin']);