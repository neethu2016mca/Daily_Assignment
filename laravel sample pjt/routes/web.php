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
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/index','PagesController@index');
//Route::get('/sample','BooksController@sample');
Route::get('/sample','StudentsController@sample');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@service');

//Route::get('/create', function () {
   // return view('book.books');
//});
//Route::resource('/book','Bookscontroller');
Route::get('/create', function () {
    return view('student.students');
});
Route::resource('/student','Studentscontroller');