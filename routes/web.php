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
    return view('index', [
        'header_title' => 'Laravel Blog',
        'header_subtitle' => 'Blog system built with Laravel 6 and Bootstrap 4'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'header_title' => 'About',
        'header_subtitle' => 'About subtitle'
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', [
        'header_title' => 'Contact',
        'header_subtitle' => 'Get in touch with us'
    ]);
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
