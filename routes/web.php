<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Markdown;
use Monolog\Handler\RotatingFileHandler;

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
Route::get('galeri-foto', 'GaleriFotoController@masterFoto');
Route::prefix('admin')->group(function (){
    Route::prefix('galeri')->group(function (){
        //* Route-Galeri-Foto
        Route::get('read-foto', 'GaleriFotoController@dataFoto');
        Route::post('add-foto', 'GaleriFotoController@uploadFoto');
        Route::get('select-foto/{id}', 'GaleriFotoController@selectDataFoto');
        Route::post('edit-foto/{id}', 'GaleriFotoController@editDataFoto');
        Route::post('delete-foto/{id}', 'GaleriFotoController@deleteDataFoto');
        //* End-Galeri-Foto
    
    
    });
});








