<?php

use App\Application\Front\Controllers\LaratailController;
use App\Application\Front\Controllers\AlpinejsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OnlineEditorController;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', '/component/introduction');
Route::redirect('/component', '/component/introduction');
Route::redirect('alpine-js', '/alpine-js/introduction');
Route::get('alpine-js/{component}', [AlpinejsController::class, 'index'])->name('alpine');
Route::get('laratail/{component}', [LaratailController::class, 'index']);
Route::get('component/{component}', [DocumentController::class, 'index']);
Route::get('tailwind/try', [OnlineEditorController::class, 'index']);





Auth::routes();
