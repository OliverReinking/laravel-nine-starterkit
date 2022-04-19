<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardAdminController;

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

// Anwender ist kein Administrator
Route::get('/user_is_no_admin', [HomeController::class, 'user_is_no_admin'])->name('user_is_no_admin');

// Anwendung konnte nicht gefunden werden
Route::get('/no_application_found', [HomeController::class, 'no_application_found'])->name('no_application_found');

// ------------------------------
// Routen für angemeldete Anwender
// -------------------------------
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // =================
    // APPLICATIONSWITCH
    // =================
    Route::get('/applicationswitch', [ApplicationController::class, 'index'])->name('applicationswitch');
    // =================
    // APPLICATION ADMIN
    // =================
    Route::middleware(['is_admin'])->group(function () {
        // Dashboard
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'admin_index'])->name('admin.dashboard');
        // Liste der Anwender
        Route::get('/admin/users', [DashboardAdminController::class, 'admin_index'])->name('admin.users');
        // Übersicht Prozesse
        Route::get('/admin/processes', [DashboardAdminController::class, 'admin_index'])->name('admin.processes');
        // Übersicht Blog
        Route::get('/admin/blog', [DashboardAdminController::class, 'admin_index'])->name('admin.blog');
        // Übersicht Statistik
        Route::get('/admin/statistics', [DashboardAdminController::class, 'admin_index'])->name('admin.statistics');
    });
});

// --------------
// Fallback-Route
// --------------
Route::fallback(function () {
    return Inertia::render('Application/Homepage/NoPageFound');
});
