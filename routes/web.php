<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
});

route::get('/about', function(){
    return view('users.about');
});

route::get('/contact', function(){
    return view('users.contact');
});
route::get('/dashboard', function(){
    return view('admins.index');
});