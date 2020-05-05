<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/component/alert');
Route::get('component/{component}', [DocumentController::class, 'index']);
