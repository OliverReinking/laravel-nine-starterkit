<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// --------
// Homepage
// --------
// Startseite
Route::get('/', [HomeController::class, 'home_index'])->name('home');
// Über uns
Route::get('/about', [HomeController::class, 'home_about'])->name('about');
// Unsere Mission
Route::get('/mission', [HomeController::class, 'home_mission'])->name('mission');
// Kontaktformular
Route::get('/contact', [HomeController::class, 'home_contact'])->name('contact');
// Impressum
Route::get('/imprint', [HomeController::class, 'home_imprint'])->name('imprint');
// Datenschutzerklärung
Route::get('/privacy', [HomeController::class, 'home_privacy'])->name('privacy');

// Bewerbungsformular
Route::get('/job_application', [HomeController::class, 'home_job_application'])->name('job_application');
// Bewerbungsformular Send
Route::post('/job_application/send', [HomeController::class, 'home_job_application_send'])->name('home.job_application.send');

// ------------------------------
// Routen für angemeldete Anwender
// -------------------------------
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// --------------
// Fallback-Route
// --------------
Route::fallback(function () {
    return Inertia::render('Application/Homepage/NoPageFound');
});
