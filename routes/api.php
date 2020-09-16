<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/surat/tk','SuratController@tkData');
Route::get('/surat/sd','SuratController@sdData');
Route::get('/surat/smp','SuratController@smpData');
Route::get('/surat/sma','SuratController@smaData');
Route::get('/surat/komplek','SuratController@komplekData');

Route::get('/dokumentasi/tk','DokumentasiController@tkData');
Route::get('/dokumentasi/sd','DokumentasiController@sdData');
Route::get('/dokumentasi/smp','DokumentasiController@smpData');
Route::get('/dokumentasi/sma','DokumentasiController@smaData');
Route::get('/dokumentasi/komplek','DokumentasiController@komplekData');

Route::get('/event/{tgl}','EventController@getEvent');