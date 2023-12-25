<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;


Route::get('index', function () {
    return view('index'); // call view : front_agency.blade.php
});

Route::get('front_master',function () {
    return view('front_master');
});

Route::get('admins',function () {
    // return view('layouts.master_app');
    return view('admin.services.index');
});



Route::get('/', [FrontPageController::class, 'index'])->name('index');
Route::get('/about', [FrontPageController::class, 'about'])->name('front_about');
Route::get('/services', [FrontPageController::class, 'services'])->name('front_services');
Route::get('/packages', [FrontPageController::class, 'packages'])->name('front_packages');
Route::get('/contact', [FrontPageController::class, 'contact'])->name('front_contact');
Route::get('/destination', [FrontPageController::class, 'destination'])->name('front_destination');
Route::get('/booking', [FrontPageController::class, 'booking'])->name('front_booking');
Route::get('/guides', [FrontPageController::class, 'guides'])->name('front_guides');
Route::get('/testimonial', [FrontPageController::class, 'testimonial'])->name('front_testimonial');
Route::get('/page404', [FrontPageController::class, 'page404'])->name('front_page404');