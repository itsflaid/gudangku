<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('superadmin/user/index', 'superadmin.user.index')->name('superadmin.user.index');
