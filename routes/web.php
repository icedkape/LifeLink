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


// ... inside Auth Routes section ...

// 1. Forgot Password Page
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// 2. Email Sent Page
Route::get('/email-sent', function () {
    return view('auth.email-sent');
})->name('email.sent');

// 3. Email Verification Page
Route::get('/email-verification', function () {
    return view('auth.email-verification');
})->name('otp.verify');

// 4. Reset Password Page (UPDATED)
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

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

// LOGOUT ROUTE
Route::post('/logout', function () {
    Auth::logout(); // Logs the user out
    return redirect('/'); // Redirects back to Homepage
})->name('logout');


// ==========================================
// 3. DASHBOARDS
// ==========================================

// Route for Donor Dashboard
Route::get('/donor/dashboard', function () {
    return view('dashboard.donor');
})->name('donor.dashboard');

Route::get('/donor/form', function () {
    return view('dashboard.donor-form');
})->name('donor.form');

Route::get('/donor/submitted', function () {
    return view('dashboard.d-after-submitting');
})->name('donor.submitted');

Route::get('/recipient/dashboard', function () {
    return view('dashboard.recipient'); 
})->name('recipient.dashboard');

Route::get('/recipient/form', function () {
    return view('dashboard.recipient-form');
})->name('recipient.form');

// 3. Recipient Submitted (Success Page)
Route::get('/recipient/submitted', function () {
    return view('dashboard.r-after-submitting'); // Or create 'r-after-submitting' if content differs
})->name('recipient.submitted');


// ==========================================
// 4. ADMIN ROUTES
// ==========================================

// 1. Admin Login Page
Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->name('admin.login');

// 2. Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->name('admin.dashboard');

// 3. Login POST Logic
Route::post('/admin/login', function (Request $request) {
    return redirect()->route('admin.dashboard');
})->name('admin.login.post');

// 4. View Details Redirect Route
Route::get('/admin/view', function () {
    return view('dashboard.view'); // Loads view.blade.php
})->name('admin.view');