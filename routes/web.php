<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageSeoController;
use App\Http\Controllers\DocumentController;

Route::redirect('/', '/component/alert');
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::resource('admin/pageseo', PageSeoController::class);
