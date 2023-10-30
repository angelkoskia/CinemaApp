<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserLogin;

Route::middleware(['web', 'auth'])
->group(function () {
Route::get('/email/verify', [UserLogin::class, 'showVerificationNotice'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [UserLogin::class, 'verifyEmail'])->middleware(['signed'])->name('verification.verify');
Route::post('/email/verification-notification', [UserLogin::class, 'sendVerificationEmail'])->middleware(['throttle:6,1'])->name('verification.send');
});
