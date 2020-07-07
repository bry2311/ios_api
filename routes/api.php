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
