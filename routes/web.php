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
Route::get('/home', function() {
 	return '<h1>This is home page</h1>' ;
});

Route::get('/blog/{page_id}', function($page_id) {
     return "<h1>This is blog page : $page_id </h1>" ;
});

Route::get('/blog/{page_id}/edit', function($page_id) {
 	return "<h1>This is blog page : $page_id for edit</h1>" ;
});

Route::get('/product/{a}/{b}/{c}', function($a, $b, $c) {
 	return "<h1>This is product page </h1><div>$a , $b, $c</div>" ;
});

Route::get('/category/{a?}', function($a = "mobile") {
 	return "<h1>This is category page : $a </h1>" ;
});
Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee', 'EmployeeController@store');
Route::get('/employee/{id}', 'EmployeeController@show');
Route::get('/employee/{id}/edit', 'EmployeeController@edit');
Route::put('/employee/{id}', 'EmployeeController@update');
Route::delete('/employee/{id}', 'EmployeeController@destroy');

Route::get('/position', 'PositionController@index');
Route::get('/position/create', 'PositionController@create');
Route::post('/position', 'PositionController@store');
Route::get('/position/{id}', 'PositionController@show');
Route::get('/position/{id}/edit', 'PositionController@edit');
Route::put('/position/{id}', 'PositionController@update');
Route::delete('/position/{id}', 'PositionController@destroy');




