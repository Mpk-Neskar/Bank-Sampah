<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PenanggungJawabController;

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

Route::resource('/kelas', KelasController::class)->parameters([
    'kelas' => 'kelas',
]);

Route::resource('/penanggung-jawab', PenanggungJawabController::class)->parameters([
    'penanggung-jawab' => 'penanggung-jawab',
]);

Route::resource('/arsip', ArsipController::class)->parameters([ 
    'arsip' => 'arsip',
]);