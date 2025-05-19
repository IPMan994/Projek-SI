<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
Route::get('/tickets/select', [TicketController::class, 'select'])->name('tickets.index');
Route::post('/tickets/checkout', [TicketController::class, 'checkout'])->name('tickets.checkout');
Route::get('/tickets/confirmation', [TicketController::class, 'confirmation'])->name('tickets.confirmation');
Route::get('/checkout/{ticketType}', [CheckoutController::class, 'showForm'])->name('checkout.form');
Route::post('/checkout', [CheckoutController::class, 'submitForm'])->name('checkout.submit');

require __DIR__.'/auth.php';
