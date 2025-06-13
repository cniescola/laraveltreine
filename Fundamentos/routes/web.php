<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UnicoController;
use App\Models\Client;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[SiteController::class,'index']);
Route::get('/Cadastrar',[SiteController::class,'cadastrar']);
Route::post('/index',[SiteController::class,'store']);