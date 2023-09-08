<?php
use App\Http\Controllers\VacantiesController;

Route::get('/contact/', 'ContactController@contact')->name('contact');
Route::post('/contact/', 'ContactController@contactPost')->name('contactPost');

Route::get('/test/', function () {
	return view('test');
});

// \TAO::datatype('vacanties')->routePageById();

\TAO::selector('vacanties')->route([
    'url' => '/vacanties/',
]);

Route::get('/vacanties/{id}/', function($id) {
    return VacantiesController::vacantiesId($id); 
});

