<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\FoundandlostController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\WallController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\AutoCompleter;

Route::get('/ping',function(){

    return  ["pong" => true];

});


Route::get('/401',[AuthController::class, 'unauthorized'])->name('login');
// Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/register',[AuthController::class, 'register']);

// Route::middleware('auth:api')->group(function(){

//     Route::post('/auth/validate',[AuthController::class, 'validateToken']);
//     Route::post('/auth/logout',[AuthController::class, 'logout']);

//     //Mural de aviso

//     Route::get('/walls',[WallController::class, 'getAll']);
//     Route::post('/walls/{{id}}/like',[WallController::class, 'like']);

//     //documentos
//     Route::get('/docs',[DocController::class, 'All']);

//     //livro de ocorrencias
//     Route::get('/warnings',[WarningController::class, 'getAllWarning']);
//     Route::post('/warning',[WarningController::class, 'setWarning']);
//     Route::post('/warning/file',[WarningController::class, 'warningfile']);


//     //boletos

//     Route::get('/bilets',[BilletsController::class, 'infoAll']);


//     //Achados

//  Route::get('/foundandlost',[FoundandlostController::class, 'all']);
//  Route::post('/foundandlost',[FoundandlostController::class, 'insert']);
//  Route::put('/foundandlost/{id}',[FoundandlostController::class, 'update']);


//  //unidade


//  Route::get('/units/{id}',[FoundandlostController::class, 'dadosAll']);
//  Route::post('/units/{id}/addperson',[FoundandlostController::class, 'insert']);
//  Route::put('/units/{id}/addvehicle',[FoundandlostController::class, 'addVehicle']);
//  Route::put('/units/{id}/addpet',[FoundandlostController::class, 'addpet']);
//  Route::delete('/units/{id}/removeperson',[FoundandlostController::class, 'removeperson']);
//  Route::delete('/units/{id}/removevehicle',[FoundandlostController::class, 'removevehicle']);
//  Route::delete('/units/{id}/removepet',[FoundandlostController::class, 'removepet']);


//  //Reservas


//  Route::get('/reservations',[ReservationController::class, 'getReservation']);
//  Route::get('/myreservation',[ReservationsController::class, 'getMyReservations']);
//  Route::delete('/myreservation/{id}',[ReservationsController::class, 'delMyReservations']);
//  Route::post('/myreservation/{id}',[ReservationsController::class, 'setReservations']);
//  Route::get('/reservations/{id}/disabledates',[ReservationController::class, 'getDisabledates']);
//  Route::get('/reservations/{id}/times',[ReservationController::class, 'getTimes']);

















// });
