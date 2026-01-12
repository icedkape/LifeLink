<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ==========================================
// 1. PUBLIC PAGES
// ==========================================

Route::get('/', function () {
    return view('homepage');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/success', function () {
    return view('success');
});

// Informational Pages
Route::get('/alert-match', function () { return view('alert-match'); });
Route::get('/medical-review', function () { return view('medical-review'); });
Route::get('/consent-docs', function () { return view('consent-docs'); });
Route::get('/coming-soon', function () { return view('coming-soon'); });


// ==========================================
// 2. LOGIN FLOW (New Structure)
// ==========================================

// A. Main Selection Page (The buttons page)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// B. Donor Login
Route::get('/donor-login', function () {
    return view('auth.donor-login');
})->name('login.donor');

Route::post('/donor-login', function (Request $request) {
    // Logic to verify Donor credentials would go here
    return redirect('/donor/dashboard');
})->name('login.donor.post');

// C. Recipient Login
Route::get('/recipient-login', function () {
    return view('auth.recipient-login');
})->name('login.recipient');

Route::post('/recipient-login', function (Request $request) {
    // Logic to verify Recipient credentials would go here
    return redirect('/recipient/dashboard');
})->name('login.recipient.post');


// ==========================================
// 3. DASHBOARDS
// ==========================================

// Route for Donor Dashboard
Route::get('/donor/dashboard', function () {
    return view('dashboard.donor');
})->name('donor.dashboard');

Route::get('/recipient/dashboard', function () {
    return "<h1>Welcome to the Recipient Dashboard</h1><p>Match status and alerts will go here.</p>";
})->name('recipient.dashboard');


// ==========================================
// 4. ADMIN ROUTES
// ==========================================

Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    // Admin auth logic
    return "Admin Login Successful";
})->name('admin.login.post');