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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//web -> client
// url de la ruta ... name -> nombre para mandarla llamar
// Route::get('blog', 'Web\PageController@blog')->name('blog');
// Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');
// Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
// Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');

//admin
Route::resource('categories','Admin\CategoryController');
Route::resource('items','Admin\ItemController');
Route::resource('products','Admin\ProductController');
Route::resource('suppliers','Admin\SupplierController');
Route::resource('sales','Admin\SaleController');
