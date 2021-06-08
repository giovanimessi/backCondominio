<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WallController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\AutoCompleter;

Route::get('/ping',function(){

    return  ["pong" => true];

});


Route::get('/401',[AuthController::class, 'unauthorized'])->name('login');
Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/register',[AuthController::class, 'register']);

Route::middleware('auth:api')->group(function(){

    Route::post('/auth/validate',[AuthController::class, 'validateToken']);
    Route::post('/auth/logout',[AuthController::class, 'logout']);

    //Mural de aviso

    Route::get('/walls',[WallController::class, 'getAll']);
    Route::post('/walls/{{id}}/like',[WallController::class, 'like']);

    //documentos
    Route::get('/docs',[DocController::class, 'All']);

    //livro de ocorrencias
    Route::get('/warnings',[WarningController::class, 'getAllWarning']);
    Route::post('/warning',[WarningController::class, 'setWarning']);
    Route::post('/warning/file',[WarningController::class, 'All']);







});
