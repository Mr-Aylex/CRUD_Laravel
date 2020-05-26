<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','cree_controller@menu');

//Route::get('menu','cree_controller@menu');

Route::get('new_perso','cree_controller@formulaire');

Route::post('nouveau','cree_controller@new_perso');

Route::post('suppression','cree_controller@suppression');
