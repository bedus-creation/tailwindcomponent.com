<?php

use App\Application\Admin\Controllers\ArticleController;
use App\Domain\User\Enums\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageSeoController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\DocsWriterController;
use App\Http\Controllers\EditorController;

Route::resource('editors', EditorController::class)->only(['store', 'show']);
Route::resource('design', DesignController::class)->only(['index', 'show']);
Route::resource('docs', DocsWriterController::class)->only(['index']);

// Admin Editors
Route::resource('admin/pageseo', PageSeoController::class);
Route::resource('admin/editors', EditorController::class)->only(['index', 'store', 'edit', 'update']);

Route::group(['prefix' => 'admin', 'middleware' => ['role:' . Role::ADMIN]], function () {
    Route::resource('articles', ArticleController::class);
});
