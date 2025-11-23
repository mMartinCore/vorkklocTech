<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\RateController;
  
Route::get('pages/contact', [PageController::class, 'contact'])->name('contact');
Route::get('pages/about', [PageController::class, 'about'])->name('about');
Route::get('pages/rates', [PageController::class, 'rates'])->name('rates');
Route::get('pages/products', [PageController::class, 'products'])->name('products');
Route::get('pages/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('pages/term-condition', [PageController::class, 'term'])->name('term-condition'); 
Route::get('pages/calculator', [PageController::class, 'calculator'])->name('calculator');
Route::post('pages/send_email', [PageController::class, 'send_email'])->name('send_email');  
Route::get('/', [PageController::class, 'home'])->name('home'); 
Route::get('sitemap', [PageController::class, 'sitemap'])->name('sitemap');