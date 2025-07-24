<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Coach;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    $coaches = Coach::all();
    return view('welcome', compact('coaches'));
})->name('welcome');
Route::get('/inscription', function () {
    return view('Inscription.index');
})->name('inscription');

Route::get('/inscription/coach', function () {
    return view('Inscription.components.coach-inscription');
})->name('inscription.coach');

Route::get('/inscription/etudiant', function () {
    return view('Inscription.components.student-inscription');
})->name('inscription.etudiant');

Route::get('/inscription/about', function () {
    return view('Inscription.components.about-us');
})->name('inscription.about');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'subscribed'])->name('dashboard');

Route::get('/coach/{coach}', function (Coach $coach) {
    return view('coach.show', compact('coach'));
})->middleware(['auth', 'verified', 'subscribed'])->name('coach.show');

Route::get('/course/{course}', function (\App\Models\Course $course) {
    return view('course.show', compact('course'));
})->middleware(['auth', 'verified', 'subscribed'])->name('course.show');

// Routes pour l'abonnement
Route::middleware('auth')->group(function () {

        Route::view('email/verify', 'auth.verify-email')
         ->name('verification.notice');

    // Handle the link from the user’s email
    Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->intended('/dashboard');
    })->middleware(['signed'])->name('verification.verify');

    // Resend verification link
    Route::post('email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'verification-link-sent');
    })->middleware('throttle:6,1')->name('verification.send');


    // ************************ Inscription au congrés ***********************************************
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
