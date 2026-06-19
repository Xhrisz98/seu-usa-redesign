<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// GET Page Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/solutions', [PageController::class, 'services'])->name('services');
Route::get('/sectors', [PageController::class, 'industries'])->name('industries');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// POST Form Submissions Route
Route::post('/contact/submit', [PageController::class, 'submitContact'])->name('contact.submit');
