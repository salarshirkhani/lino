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


Route::get('/', 'FrontController@welcome')->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//DATA MANAGMENT
Route::get('raftarstock', 'FrontController@GetRaftarStock')->name('raftarstock');
Route::get('raftardarsadi', 'FrontController@Raftar_Darsadi_Tajmiei')->name('raftardarsadi');
Route::get('smartdarsadi', 'FrontController@Smart_Darsadi')->name('smartdarsadi');
Route::get('darsadisudgir', 'FrontController@Darsadi_SudGir')->name('darsadisudgir');
Route::get('profile', 'FrontController@profile')->name('profile');