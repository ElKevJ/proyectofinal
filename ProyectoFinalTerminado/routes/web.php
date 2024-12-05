<?php

use App\Models\Alumnos;
use App\Http\Controllers\ContP;
use App\Models\Grupos;
use Illuminate\Support\Facades\Route;

Route::get('/',[ContP::class,'index'])->name('index');
Route::get('/formpeli',[ContP::class,'formpeli'])->name('formpeli');
Route::post('/agregarpeli',[ContP::class,'agregarpeli'])->name('agregarpeli');
Route::get('/formact', [ContP::class, 'formact'])->name('formact');
Route::post('/agregaract',[ContP::class,'agregaract'])->name('agregaract');
Route::get('/peliculas', [ContP::class, 'peliculas'])->name('peliculas');
Route::get('/actores', [ContP::class, 'actores'])->name('actores');
Route::get('/editaractores/{act_edi}',[ContP::class,'editaractores'])->name('editaractores');
Route::put('/actualizaractores/{act_up}',[ContP::class,'actualizaractores'])->name('actualizaractores');
Route::get('/filtrarAct',[ContP::class,'filtrarAct'])->name('filtrarAct');
Route::delete('/borraract/{actores}',[ContP::class,'borraract'])->name('borraract');
Route::get('/editarpelicula/{pel_edi}',[ContP::class,'editarpelicula'])->name('editarpelicula');
Route::put('/actualizarpelicula/{pel_up}',[ContP::class,'actualizarpelicula'])->name('actualizarpelicula');
Route::delete('/borrarpelicula/{peliculas}',[ContP::class,'borrarpelicula'])->name('borrarpelicula');
Route::get('/filtrarpel',[ContP::class,'filtrarpel'])->name('filtrarpel');
Route::get('/ordenarpel/{ord_pel}',[ContP::class,'ordenarpel'])->name('ordenarpel');
Route::get('/ordenaract/{ord_act}',[ContP::class,'ordenaract'])->name('ordenaract');
