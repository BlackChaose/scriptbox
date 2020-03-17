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

Route::get('/', 'ShowMainPage')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stub','ShowStub')->name('show.stub');
// headings:fixme:!
Route::get('/charts','ShowChartsPage')->middleware('auth')->name('show.charts');
Route::get('/configs','ShowConfigsPage')->middleware('auth')->name('show.configs');
Route::get('/snippets','ShowSnippetsPage')->middleware('auth')->name('show.snippets');
Route::get('/tm','ShowTmPage')->middleware('auth')->name('show.tm');
Route::get('/library','ShowLibraryPage')->middleware('auth')->name('show.library');
Route::get('/bookmarks','ShowBookmarksPage')->middleware('auth')->name('show.bookmarks');
Route::get('/weather','ShowWeatherPage')->middleware('auth')->name('show.weather');
Route::get('/dictionaries','ShowDictionariesPage')->middleware('auth')->name('show.dictionaries');
Route::get('/posts','ShowPostsPage')->middleware('auth')->name('show.posts');
Route::get('/creatives','ShowCreativesPage')->middleware('auth')->name('show.creatives');
Route::get('/news','ShowNewsPage')->middleware('auth')->name('show.news');

