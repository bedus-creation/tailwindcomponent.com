<?php

use App\Application\Admin\Controllers\ArticleController;
use App\Application\Admin\Controllers\CategoriesController;
use App\Application\Admin\Controllers\DashboardController;
use App\Application\Admin\Controllers\RolesController;
use App\Application\Admin\Controllers\TagsController;
use App\Application\Admin\Controllers\MediaController;
use App\Application\Admin\Controllers\UsersController;
use App\Application\CMS\Controllers\PageController;
use App\Http\Controllers\DocsWriterController;
use App\Http\Controllers\PageSeoController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;
use App\Domain\User\Enums\Role;

Route::resource('editors', EditorController::class)->only(['store', 'show']);
Route::resource('design', DesignController::class)->only(['index', 'show']);
Route::resource('docs', DocsWriterController::class)->only(['index']);

// Admin Editors
Route::resource('admin/pageseo', PageSeoController::class);
Route::resource('admin/editors', EditorController::class)->only(['index', 'store', 'edit', 'update']);

Route::group(['prefix' => 'admin', 'middleware' => ['role:' . Role::ADMIN . '|' . Role::SYSTEM_ADMIN]], function () {
    Route::resource('/', DashboardController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('users', UsersController::class)->except(['edit', 'update']);
    Route::resource('roles', RolesController::class);
    Route::post('/upload/image', MediaController::class);
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('pages', PageController::class);
});
