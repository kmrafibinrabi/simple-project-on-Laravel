<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::view(uri: '/about', view: 'about')->name(name: 'about');

Route::view(uri: '/contact', view: 'contact')->name(name: 'contact');
