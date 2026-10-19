<?php

use Illuminate\Support\Facades\Route;

// Menampilkan halaman form register
Route::get('/register', function () {
    return view('auth.register');
})->name('register.page');

// Menampilkan halaman form login
Route::get('/login', function () {
    return view('auth.login');
})->name('login.page');

// Halaman Manajemen User (US-18)
Route::get('/admin/users-management', function () {
    return view('admin.users.index');
})->name('admin.users.index');

// Halaman Manajemen Dashboard Super Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

// Halaman Manajemen Track US-19
Route::get('/admin/tracks-management', function () {
    return view('admin.tracks.index');
})->name('admin.tracks.index');

// Halaman Manajemen Peminatan US-20
Route::get('/admin/peminatan-management', function () {
    return view('admin.peminatan.index');
})->name('admin.peminatan.index');

// Halaman Manajemen FAQ US-21
Route::get('/admin/faq-management', function () {
    return view('admin.faq.index');
})->name('admin.faq.index');
