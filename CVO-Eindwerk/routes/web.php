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

Route::get('/inschrijven', [InschrijvenController::class, 'index'])->name('inschrijven.index');
Route::post('/inschrijven', [InschrijvenController::class, 'handleInschrijven'])->name('inschrijven.post');

Route::get('/kalender', [KalenderController::class, 'index'])->name('kalender.index');

Route::get('/hondensport', [HondensportController::class, 'index'])->name('hondensport.index');

Route::get('/maatschappelijk', [MaatschappelijkController::class, 'index'])->name('maatschappelijk.index');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post')->middleware('guest');
Route::get('/aanmelden', [AuthController::class, 'aanmelden'])->name('aanmelden');
Route::post('/aanmelden', [AuthController::class, 'handleAanmelden'])->name('aanmelden.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');