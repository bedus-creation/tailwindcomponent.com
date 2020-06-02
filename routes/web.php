<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OnlineEditorController;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', '/component/introduction');
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::get('tailwind/try', [OnlineEditorController::class, 'index']);





Auth::routes();
