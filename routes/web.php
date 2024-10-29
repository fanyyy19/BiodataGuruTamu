<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//  Ini adalah ryte tanpa MVC
Route::get('/rutebaru', function() 
{
    return '<h1 style= "color:red;">Ini adalah rute baru tanpa MVC';
});

// Ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});


Route::get('/rutecontroller', [RuteController::class,'menampilkanData']);


// Ini adalah rute dengan view, controller & Model
Route::get('/rutemodel',[RuteController::class, 'menampilkanDataModel']);

// Ini adalah Biodata Saya
Route::get('/rutebiodata',[BiodataController::class, 'menampilkanBiodata']);
