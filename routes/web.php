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



Route::get('/', 'HomepageController@index');

Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin/')->name('admin.')->middleware('role:admin')->group(function () {
    Route::get('/dashboard', 'Admin\\HomeController@index')->name('dashboard');

    Route::resource('/posts', 'Admin\\PostController')->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
    ]);

    Route::resource('/pages', 'Admin\\PageController')->names([
        'index' => 'pages.index',
        'create' => 'pages.create',
        'store' => 'pages.store',
        'edit' => 'pages.edit',
        'update' => 'pages.update',
    ]);

    Route::resource('/fields', 'Admin\\FieldController')->names([
        'index' => 'fields.index',
        'create' => 'fields.create',
        'store' => 'fields.store',
        'edit' => 'fields.edit',
        'update' => 'fields.update',
    ]);
});

