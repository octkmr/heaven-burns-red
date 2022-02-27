<?php

use App\Http\Controllers\GatchaController;
use App\Http\Controllers\StrengthCalculator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

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

Route::get('character', [CharacterController::class, 'index'])->name('character.index');
Route::get('character/{character}', [CharacterController::class, 'detail'])->name('character.detail');

Route::get('gatcha', [GatchaController::class, 'index'])->name('gatcha.index');
Route::get('gatcha/result', [GatchaController::class, 'result'])->name('gatcha.result');
