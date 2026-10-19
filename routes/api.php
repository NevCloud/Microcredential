<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\Admin\TrackController;
use App\Http\Controllers\Api\Admin\PeminatanController;
use App\Http\Controllers\Api\Admin\FaqController;
use App\Http\Controllers\Api\Admin\LandingPageController;

Route::prefix('v1')->group(function () {

    // Auth Routes
    Route::post('/auth/register', [RegisterController::class, 'register']);
    Route::post('/auth/login', [LoginController::class, 'login']);
    Route::post('/auth/logout', [LogoutController::class, 'logout']);

    // Admin Users Management (US-18)
    Route::apiResource('/admin/users', UserController::class);

    // Track Management (US-19)
    // Anda bisa membuat GET index terbuka untuk publik/peserta, sedangkan CUD untuk admin
    Route::get('/tracks', [TrackController::class, 'index']);
    Route::post('/admin/tracks', [TrackController::class, 'store']);
    Route::get('/admin/tracks/{id}', [TrackController::class, 'show']);
    Route::put('/admin/tracks/{id}', [TrackController::class, 'update']);
    Route::delete('/admin/tracks/{id}', [TrackController::class, 'destroy']);

    // Peminatan/Prodi Management (US-20)
    Route::get('/peminatan', [PeminatanController::class, 'index']); // Publik (untuk pilihan pendaftaran)
    Route::post('/admin/peminatan', [PeminatanController::class, 'store']);
    Route::get('/admin/peminatan/{id}', [PeminatanController::class, 'show']);
    Route::put('/admin/peminatan/{id}', [PeminatanController::class, 'update']);
    Route::delete('/admin/peminatan/{id}', [PeminatanController::class, 'destroy']);

    // FAQ Management (US-21)
    Route::get('/faq', [FaqController::class, 'index']); // Publik (tampil di Landing Page)
    Route::post('/admin/faq', [FaqController::class, 'store']);
    Route::get('/admin/faq/{id}', [FaqController::class, 'show']);
    Route::put('/admin/faq/{id}', [FaqController::class, 'update']);
    Route::delete('/admin/faq/{id}', [FaqController::class, 'destroy']);

    // Landing Page Content Management (US-24)
    Route::get('/landing-page', [LandingPageController::class, 'index']); // Publik (dirender di Frontend Web/Mobile)
    Route::post('/admin/landing-page', [LandingPageController::class, 'store']);
    Route::get('/admin/landing-page/{id}', [LandingPageController::class, 'show']);
    Route::put('/admin/landing-page/{id}', [LandingPageController::class, 'update']);
    Route::delete('/admin/landing-page/{id}', [LandingPageController::class, 'destroy']);

});
