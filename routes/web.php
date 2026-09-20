<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataDiriController;

Route::get('/datadiri', [DataDiriController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
