<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Box;
use App\http\Controllers\Biodata;

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
Route::get('/percobaan', [Box::class, 'coba']
);

Route::get('/box', [Box::class, 'index']);
Route::get('/biodata', [Biodata::class, 'index']);

Route::get('/biodata/{id}', [Biodata::class, 'index']);

