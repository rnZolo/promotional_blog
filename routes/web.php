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

Route::get('/about', function(){
    return view('page.about');
})->name('about');

Route::prefix('ContactUs')->group(function (){
    Route::resource('comment', 'CommentsController');
});


