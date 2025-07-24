<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Coach;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

// Public pages
Route::get('/', fn() => view('welcome', [
    'coaches' => Coach::all(),
]))->name('welcome');

Route::view('/inscription',          'Inscription.index')->name('inscription');
Route::view('/inscription/coach',    'Inscription.components.coach-inscription')->name('inscription.coach');
Route::view('/inscription/etudiant', 'Inscription.components.student-inscription')->name('inscription.etudiant');
Route::view('/inscription/about',    'Inscription.components.about-us')->name('inscription.about');

// Include Breeze’s auth routes (login/register/verification)
require __DIR__.'/auth.php';

// Protected: must be authenticated, email-verified, and subscribed
Route::middleware(['auth', 'verified', 'subscribed'])->group(function () {
    Route::view('/dashboard',      'dashboard')->name('dashboard');
    Route::get('/coach/{coach}',   fn(Coach $coach)   => view('coach.show',   compact('coach')))
         ->name('coach.show');
    Route::get('/course/{course}', fn(Course $course) => view('course.show',  compact('course')))
         ->name('course.show');
});

// Subscription checkout & process (only auth required)
Route::middleware('auth')->group(function () {
    Route::get('/subscription/checkout', [SubscriptionController::class, 'checkout'])
         ->name('subscription.checkout');
    Route::post('/subscription/process', [SubscriptionController::class, 'process'])
         ->name('subscription.process');
    Route::get('/subscription/success',  [SubscriptionController::class, 'success'])
         ->name('subscription.success');
});

// Profile routes (only auth required)
Route::middleware('auth')->group(function () {
    Route::get('/profile',   [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class, 'destroy'])->name('profile.destroy');
});
