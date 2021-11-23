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

Route::get('/obory/{field}', 'FieldController@show')->name('fields.show');
Route::get('/aktuality', 'PostController@index')->name('posts.index');
Route::get('/aktuality/{post}', 'PostController@show')->name('posts.show');
Route::get('/stranky/{page}', 'PageController@show')->name('pages.show');
Route::get('/galerie', 'GalleryImageController@index')->name('gallery_images.index');

Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

Auth::routes();

Route::get('/home', 'HomepageController@index')->name('home');

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

    Route::get('ckeditor', 'Admin\\CkeditorController@index');
    Route::post('ckeditor/upload', 'Admin\\CkeditorController@upload')->name('ckeditor.upload');

    Route::resource('/fields', 'Admin\\FieldController')->names([
        'index' => 'fields.index',
        'create' => 'fields.create',
        'store' => 'fields.store',
        'edit' => 'fields.edit',
        'update' => 'fields.update',
    ]);

    Route::resource('/partners', 'Admin\\PartnerController')->names([
        'index' => 'partners.index',
        'create' => 'partners.create',
        'store' => 'partners.store',
        'edit' => 'partners.edit',
        'update' => 'partners.update',
    ]);

    Route::resource('/reviews', 'Admin\\ReviewController')->names([
        'index' => 'reviews.index',
        'create' => 'reviews.create',
        'store' => 'reviews.store',
        'edit' => 'reviews.edit',
        'update' => 'reviews.update',
    ]);

    Route::resource('/gallery_images', 'Admin\\GalleryImageController')->names([
        'index' => 'gallery_images.index',
        'create' => 'gallery_images.create',
        'store' => 'gallery_images.store',
        'edit' => 'gallery_images.edit',
        'update' => 'gallery_images.update',
    ]);
});

