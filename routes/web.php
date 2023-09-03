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
    Route::redirect('/', '/blogs', 302);


    Route::get('/blogs', function () {
                        return view('welcome');
                        })->name('welcome');

    Route::get('/about', 'InformationController@info')->name('about');

    Route::get('/where-to-go', 'DestinationsController@index')->name('wheretogo');              

    Route::get('/gallery', 'GalleryController@index')->name('gallery');

    Route::prefix('ContactUs')->group(function (){
                        Route::resource('comment', 'CommentsController');
                         });


