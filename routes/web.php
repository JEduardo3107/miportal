<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\session\loginController;
use App\Http\Controllers\dashboard\mainController;

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

Route::controller(loginController::class)->group(function(){
    Route::get('/iniciar-sesion', 'index')->name('login');
    Route::post('/iniciar-sesion', 'store')->name('login.store');
});


Route::middleware('auth')->group(function(){
	// raiz
    Route::get('/', [mainController::class, 'index'])->name('home');

});