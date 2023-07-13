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
Route::get('/donation', [HomeController::class,'donation'])->name('donation');
Route::get('/donation-details', [HomeController::class,'donation_details'])->name('donation-details');
Route::get('/donate-now', [HomeController::class,'donate_now'])->name('donate-now');
Route::get('/donation-carousel', [HomeController::class,'donation_carousel'])->name('donation-carousel');
Route::post('/donation-list', [HomeController::class,'donation-list'])->name('donation-list');
Route::get('/events', [HomeController::class,'events'])->name('events');
Route::post('/event-details', [HomeController::class,'event_details'])->name('event-details');
Route::get('/events-carousel', [HomeController::class,'events_carousel'])->name('events-carousel');
Route::post('/faq', [HomeController::class,'faq'])->name('faq');
Route::get('/gallery', [HomeController::class,'gallery'])->name('gallery');
Route::post('/contact', [HomeController::class,'contact']);
Route::get('/departements', [HomeController::class,'departements'])->name('departements');
Route::post('/departement-details', [HomeController::class,'departement_details'])->name('departement-details');

