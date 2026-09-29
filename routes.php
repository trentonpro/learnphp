<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);

Router::get('/forms', [PublicController::class, 'forms']);
Router::post('/forms', [PublicController::class, 'answer']);


Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/create', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/view', [ArticlesController::class, 'view']);
Router::get('/admin/articles/edit', [ArticlesController::class, 'edit']);
Router::post('/admin/articles/edit', [ArticlesController::class, 'update']);
Router::get('/admin/articles/delete', [ArticlesController::class, 'delete']);