<?php

use Illuminate\Support\Facades\Route;

// $servicios=[
//     ['titulo'=>'Servicio 1'],
//     ['titulo'=>'Servicio 2'],
//     ['titulo'=>'Servicio 3'],
//     ['titulo'=>'Servicio 4'],
//     ['titulo'=>'Servicio 5'],
// ];


Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

// controlador 1
Route::get('servicios','App\Http\Controllers\ServiciosController@servicios' )->name('servicios');
Route::get('servicios/crear','App\Http\Controllers\ServiciosController@create')->name('servicios.create');
Route::post('servicios','App\Http\Controllers\ServiciosController@store')->name('servicios.store');

Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');







// controlador 2
// Route::get('servicios','App\Http\Controllers\Servicios2Controller@index' )->name('servicios');


Route::view('contacto','contacto')->name('contacto');


// route::resource('servicios','App\Http\Controllers\Servicios2Controller')->only('index','show');




//el q use
// Route::view('servicios','servicios', compact('servicios'))->name('servicios');
