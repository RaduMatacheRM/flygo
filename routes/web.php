<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrosswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!pg
|
*/

Route::get('/', function () {
    return view('date-search');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/get-object-by-date', [CrosswordController::class, 'getObjectByDate']);
Route::post('/crosswords', [CrosswordController::class, 'store'])->name('crosswords.store');
