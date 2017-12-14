<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/stadistic', function () {
    return view('stadistic');
});
Route::get('/modelo3', function () {
    return view('encuesta');
});
Route::get('/random', function () {
    return view('random');
});
Route::post('/random', 'modelo3Controller@insertRandom');

Route::post('/modelo3', 'modelo3Controller@store');
Route::get('/aleatorio', 'modelo3Controller@aleatorio');