<?php

use Illuminate\Support\Facades\Route;
use App\Application\Front\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/component-sitemap.xml', [SitemapController::class, 'component']);
Route::get('/design-sitemap.xml', [SitemapController::class, 'design']);
