<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

// localhost/
Route::get('/', [HomeController::class, 'home']);

// localhost/welcome
Route::get('/welcome', [HomeController::class, 'welcome']);

// localhost/contact
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/succes', [ContactController::class, 'succes']);