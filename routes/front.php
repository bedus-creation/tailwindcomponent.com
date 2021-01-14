<?php

use App\Application\Front\Controllers\BlogController;
use App\Application\Front\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Application\Front\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/component-sitemap.xml', [SitemapController::class, 'component']);
Route::get('/design-sitemap.xml', [SitemapController::class, 'design']);

// Privacy and Basic routes
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/copyright', [PageController::class, 'copyright'])->name('copyright');
Route::get('/code-of-conduct', [PageController::class, 'code'])->name('code');
Route::get('/privacy-and-policy', [PageController::class, 'privacy'])->name('privacy');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [PageController::class, 'blog'])->name('blogs.show');
