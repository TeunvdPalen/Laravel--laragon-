<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/privacy', [PrivacyController::class, 'privacy']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/contact-berichten', [AdminController::class, 'contactBerichten']);
Route::get('/admin/nieuws-berichten', [AdminController::class, 'nieuwsBerichten']);
Route::get('/admin/privacy', [AdminController::class, 'privacy']);

Route::post('/contact', [ContactController::class, 'verzenden']);

Route::get('/review', [ContactController::class, 'review']);
Route::post('/review', [ContactController::class, 'review_verzenden']);