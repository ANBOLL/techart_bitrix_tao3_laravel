<?php
use Illuminate\Support\Facades\Route;

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');

Route::get('/test/', function () {
	return view('test');
});