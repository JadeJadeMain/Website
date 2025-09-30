<?php

use Illuminate\Support\Facades\Route;
// navigation to page
Route::get('/', function () {
    return view('main.index');
});
// about page
Route::get('/about', function () {
    return view('nav.about'); // views/about.blade.php
});


Route::get('/service', function () {
    return view('nav.service'); // views/contact.blade.php
});

//contact page
Route::get('/contact', function () {
    return view('nav.contact'); // views/contact.blade.php
});
