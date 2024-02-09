<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/libreria', function(){
return view('libreria');
}); */
Route::get('/libreria', [BookController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//modifica librio view
Route::get('/modifica/{id}',[BookController::class,'modifica']);
//modifica libro 
Route::post('update',[BookController::class,'update']);

//elimina librio
Route::post('/elimina/{id}',[BookController::class,'delete']);

Route::post('/create',[BookController::class,'create']);
