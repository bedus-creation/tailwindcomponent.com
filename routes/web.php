<?php

use App\Application\Front\Controllers\LaratailController;
use App\Application\Front\Controllers\AlpinejsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OnlineEditorController;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', '/component/introduction');
Route::get('alpinejs/{component}', [AlpinejsController::class, 'index']);
Route::get('laratail/{component}', [LaratailController::class, 'index']);
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::get('tailwind/try', [OnlineEditorController::class, 'index']);





Auth::routes();
