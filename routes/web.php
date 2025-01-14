<?php

declare(strict_types=1);

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

Route::get('/', function (): View {
    return view('welcome');
});

Route::get('/products/export/{type}', [ProductController::class, 'export']);
