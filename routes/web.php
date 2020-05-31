<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\DocsWriterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageSeoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OnlineEditorController;
use App\Http\Controllers\EditorController;

Route::redirect('/', '/component/introduction');
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::get('tailwind/try', [OnlineEditorController::class, 'index']);
Route::resource('editors', EditorController::class)->only(['store', 'show']);
Route::resource('design', DesignController::class)->only(['index', 'show']);
Route::resource('docs', DocsWriterController::class)->only(['index']);

// Admin Editors
Route::resource('admin/pageseo', PageSeoController::class);
Route::resource('admin/editors', EditorController::class)->only(['index', 'store', 'edit', 'update']);
