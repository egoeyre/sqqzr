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

Route::get('/pdf', 'PDFController@make');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

Route::resource('choices', 'ChoicesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('choices/categories', 'CategoriesController', ['only' => ['show']]);

Route::resource('blanks', 'BlanksController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('blanks/bcategories', 'BcategoriesController', ['only' => ['show']]);

Route::resource('questions', 'QuestionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('questions/qcategories', 'QcategoriesController', ['only' => ['show']]);

Route::resource('papers', 'PapersController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::resource('tcategories', 'TcategoriesController', ['only' => ['show']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);