<?php
use App\Http\Controllers\aboutController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\creationController;
use App\Http\Controllers\voitureController;

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

Route::resource('about', aboutController::class);
Route::resource('service', serviceController::class);
Route::resource('voiture', voitureController::class);

