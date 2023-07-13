<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/donations', [HomeController::class,'donations'])->name('donations');
Route::get('/donation-details', [HomeController::class,'donation_details'])->name('donation-details');
Route::get('/donate-now', [HomeController::class,'donate_now'])->name('donate-now');
Route::get('/events', [HomeController::class,'events'])->name('events');
Route::get('/event-details', [HomeController::class,'event_details'])->name('event-details');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/departements', [HomeController::class,'departements'])->name('departements');
Route::post('/departement-details', [HomeController::class,'departement_details'])->name('departement-details');
Route::get('/training', [HomeController::class,'training'])->name('training');
