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
Route::get('/identities', function (){
    return view('pages.identities');
});
Route::get('/add-new-identity', function (){
    return view('pages.add-new-identity');
});
Route::get('/identities/preference-mailbox-view', function (){
    return view('pages.identities.preference.mailbox-view');
});

Route::get('/contacts', function (){
    return view('pages.contacts');
});
Route::get('/edit-contact', function (){
    return view('pages.edit-contact');
});
