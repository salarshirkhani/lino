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

Route::post('/auth/login','AuthController@loginUser')->name('auth.login');
Route::post('/auth/register','AuthController@createUser')->name('auth.register');

//DATA MANAGMENT
Route::get('raftarstock', 'ApiController@GetRaftarStock')->name('raftarstock');
Route::get('raftardarsadi', 'ApiController@Raftar_Darsadi_Tajmiei')->name('raftardarsadi');
Route::get('smartdarsadi', 'ApiController@Smart_Darsadi')->name('smartdarsadi');
Route::get('darsadisudgir', 'ApiController@Darsadi_SudGir')->name('darsadisudgir');
