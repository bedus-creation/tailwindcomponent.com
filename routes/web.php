<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageSeoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OnlineEditorController;

Route::redirect('/', '/component/introduction');
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::resource('admin/pageseo', PageSeoController::class);
Route::get('tailwind/try', [OnlineEditorController::class, 'index']);
