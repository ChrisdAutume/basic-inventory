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
    return view('pages.search');
})->name('home');

Route::any('/create', 'ArticleController@edit')->name('article_create');
Route::any('/edit/{id?}', 'ArticleController@edit')->name('article_edit');
Route::get('/delete/{id}', 'ArticleController@delete')->name('article_delete');
Route::get('/liste', 'ArticleController@liste')->name('article_liste');
