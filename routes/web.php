<?php

use App\Http\Controllers\ArcherController;
use App\Http\Controllers\CompetitionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/archers', [ArcherController::class, 'index'])->name('archers.index');
Route::get('archers/create', [ArcherController::class, 'create'])->name('archers.create');
Route::get('/archers/{archer}', [ArcherController::class, 'show'])->name('archers.show');
Route::post('/archers', [ArcherController::class ,'store'])->name('archers.store');

Route::get('/competitions', [CompetitionController::class, 'index'])->name('competitions.index');
Route::get('/competitions/create', [CompetitionController::class, 'create'])->name('competitions.create');
