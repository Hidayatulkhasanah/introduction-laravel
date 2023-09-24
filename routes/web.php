<?php

use App\Http\Controllers\InfoKampusController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing',[LandingController::class, 'landing']);
Route::get('/profile',[ProfileController::class, 'profile']);
Route::get('/infokampus',[InfoKampusController::class,'index']);
