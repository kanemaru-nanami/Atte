<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

//出退勤打刻
Route::post('/time/timein','TimeController@timein');
Route::post('/time/timeout','TimeController@timeout');
//休憩打刻
Route::post('/time/breakin','TimeController@breakin');
Route::post('/time/breakout','TimeController@breakout');

Route::get('/time/performance','TimeController@performance');
Route::post('/time/performance','TimeController@result');