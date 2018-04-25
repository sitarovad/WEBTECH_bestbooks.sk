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

/*Route::get('/', function () {
    return view('landing_page');
});*/

//Route::resource('books', 'BookController');
Auth::routes();

Route::get('books/', 'BookController@index')->middleware('admin');
Route::get('books/create/', 'BookController@create')->middleware('admin');
Route::post('books/', 'BookController@store')->middleware('admin');
Route::get('books/{book}/', 'BookController@show');
Route::get('books/{book}/edit/', 'BookController@edit')->middleware('admin');
Route::put('books/{book}/', 'BookController@update')->middleware('admin');
Route::delete('books/{book}/', 'BookController@destroy')->middleware('admin');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/getsubcategories', 'BookController@getSubcathegories');
Route::get('/filter', 'BookController@filter')->name('filter');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/cathegory/{cathegory_id}', 'BookController@cathegoryIndex');
Route::get('/subcathegory/{subcathegory_id}', 'BookController@subcathegoryIndex');
Route::get('/search/filtred', 'BookController@findFilter')->name('find_filter');
Route::get('/cathegory/{cathegory_id}/filtred', 'BookController@cathegoryFilter');
Route::get('/subcathegory/{subcathegory_id}/filtred', 'BookController@subcathegoryFilter');

Route::post('/card/delivery_data', 'ShoppingController@storeShipping');
Route::get('/card/delivery_data', 'ShoppingController@deliveryData');
Route::post('/card/summary', 'ShoppingController@storeData');
Route::get('/card/summary', 'ShoppingController@show');
Route::get('/card', 'ShoppingController@index');
Route::get('/card/shipping', 'ShoppingController@shipping');
Route::get('/card/confirmation', 'OrderController@store');
Route::get('/card/{book_id}', 'ShoppingController@store');



