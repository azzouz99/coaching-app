<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Coach;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $coaches = Coach::all();
    return view('welcome', compact('coaches'));
});

Route::get('/dashboard', function () {
    $coaches = Coach::all();
    return view('dashboard', compact('coaches'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/coach/{coach}', function (Coach $coach) {
    return view('coach.show', compact('coach'));
})->middleware(['auth', 'verified'])->name('coach.show');

// Routes pour l'abonnement
Route::middleware('auth')->group(function () {
    Route::get('/subscription/checkout', [SubscriptionController::class, 'checkout'])->name('subscription.checkout');
    Route::post('/subscription/process', [SubscriptionController::class, 'process'])->name('subscription.process');
    Route::get('/subscription/success', [SubscriptionController::class, 'success'])->name('subscription.success');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
