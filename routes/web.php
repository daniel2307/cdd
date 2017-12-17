<?php

Route::get('/', function () {
    return view('random');
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
Route::get('/datos', 'modelo3Controller@index');

Route::get('/estadisticas', 'modelo3Controller@resultados');

Route::get('/export', 'ExcelController@export');


Route::get('/tabla', function () {
    return view('html');
});


Route::get('pdf', 'PdfController@todo');
Route::get('pdfview2', 'PdfController@preg2');
Route::get('pdfview3', 'PdfController@preg3');
Route::get('pdfview5', 'PdfController@preg5');
Route::get('pdfview6', 'PdfController@preg6');
Route::get('pdfview7', 'PdfController@preg7');
Route::get('pdfview8', 'PdfController@preg8');
Route::get('pdfview9', 'PdfController@preg9');
Route::get('pdfview10', 'PdfController@preg10');
Route::get('pdfview11', 'PdfController@preg11');
Route::get('pdfview12', 'PdfController@preg12');
Route::get('pdfview13', 'PdfController@preg13');
Route::get('pdfview14', 'PdfController@preg14');
Route::get('pdfview15', 'PdfController@preg15');
Route::get('pdfview16', 'PdfController@preg16');
Route::get('pdfview17', 'PdfController@preg17');
Route::get('pdfview18', 'PdfController@preg18');
Route::get('pdfview19', 'PdfController@preg19');
Route::get('pdfview20', 'PdfController@preg20');
