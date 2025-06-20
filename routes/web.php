<?php

use App\Http\Controllers\ArcherController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\MatchController;
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

// Route::get('/archers', [ArcherController::class, 'index'])->name('archers.index');
// Route::get('archers/create', [ArcherController::class, 'create'])->name('archers.create');
// Route::get('/archers/{archer}', [ArcherController::class, 'show'])->name('archers.show');
// Route::post('/archers', [ArcherController::class ,'store'])->name('archers.store');
// Route::get('/archers/{archer}/edit', [ArcherController::class, 'edit'])->name('archers.edit');
// Route::put('/archers/{archer}', [ArcherController::class, 'update'])->name('archers.update');
// Route::delete('/archers/{archer}', [ArcherController::class, 'destroy'])->name('archers.destroy');

Route::resource('archers', ArcherController::class);

Route::resource('competitions', CompetitionController::class);
Route::get('/competitions/{competition}/display', [CompetitionController::class, 'display'])->name('competitions.display');

Route::get('/competitions/{competition}/matches/create', [MatchController::class, 'create'])->name('matches.create');
Route::post('/competitions/{competition}/matches', [MatchController::class ,'store'])->name('matches.store');
