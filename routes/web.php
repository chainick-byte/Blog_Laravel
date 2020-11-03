<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'DameBlog@dametodo');

Route::get('/formIndex', function () {
    return view('formIndex');
});


Route::resource('/formIndex', 'CKEditorController');
//guardamos informacion desde un form

Route::post('/formIndex','EscriboBlogController@guardarRegistroForm')->name('save');

