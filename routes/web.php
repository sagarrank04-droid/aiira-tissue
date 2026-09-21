<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact-submit', [PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter-submit', [PageController::class, 'submitNewsletter'])->name('newsletter.submit');
