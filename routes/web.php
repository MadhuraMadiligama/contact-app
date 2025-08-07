<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ContactController;


Route::resource('contacts', ContactController::class);

Route::get('/', function () {
    return view('welcome');
});
