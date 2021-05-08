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

Route::get('/create-new-message', function (){
    return view('create-new-message');
});
Route::get('/drafts', function (){
    return view('pages.drafts');
});
Route::get('/sent', function (){
    return view('pages.sent');
});
