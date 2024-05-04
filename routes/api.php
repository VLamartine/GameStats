<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConexoController;


Route::prefix('conexo')->controller(ConexoController::class)->group(function(){
    Route::post('answer', 'store');
});

Route::get('/', function (Request $request) {
    return '$request->user()';
});