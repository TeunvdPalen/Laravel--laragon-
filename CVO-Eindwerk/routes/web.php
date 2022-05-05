<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlgemeenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\HondensportController;
use App\Http\Controllers\InschrijvenController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\MaatschappelijkController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/algemeen', [AlgemeenController::class, 'index'])->name('algemeen.index');
Route::get('/nieuws', [AlgemeenController::class, 'nieuws'])->name('nieuws');
Route::get('/smoelenboek', [AlgemeenController::class, 'smoelenboek'])->name('smoelenboek');
Route::get('/contact', [AlgemeenController::class, 'contact'])->name('contact');

Route::get('/cursus', [CursusController::class, 'index'])->name('cursus.index');
Route::get('/lidmaatschap', [CursusController::class, 'lidmaatschap'])->name('lidmaatschap');
Route::get('/opvoeden', [CursusController::class, 'opvoeden'])->name('opvoeden');
Route::get('/trainingsmiddelen', [CursusController::class, 'trainingsmiddelen'])->name('trainingsmiddelen');

Route::get('/inschrijven', [InschrijvenController::class, 'index'])->name('inschrijven.index')->middleware('auth');
Route::post('/inschrijven', [InschrijvenController::class, 'handleInschrijven'])->name('inschrijven.post')->middleware('auth');

Route::get('/kalender', [KalenderController::class, 'index'])->name('kalender.index');

Route::get('/hondensport', [HondensportController::class, 'index'])->name('hondensport.index');
Route::get('/agility', [HondensportController::class, 'agility'])->name('agility');
Route::get('/obedience', [HondensportController::class, 'obedience'])->name('obedience');
Route::get('/recreanten', [HondensportController::class, 'recreanten'])->name('recreanten');
Route::get('/sportnieuws', [HondensportController::class, 'sportnieuws'])->name('sportnieuws');

Route::get('/maatschappelijk', [MaatschappelijkController::class, 'index'])->name('maatschappelijk.index');
Route::get('/aaihonden', [MaatschappelijkController::class, 'aaihonden'])->name('aaihonden');
Route::get('/verhalen', [MaatschappelijkController::class, 'verhalen'])->name('verhalen');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post')->middleware('guest');
Route::get('/aanmelden', [AuthController::class, 'aanmelden'])->name('aanmelden')->middleware('guest');
Route::post('/aanmelden', [AuthController::class, 'handleAanmelden'])->name('aanmelden.post')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');