<?php

declare(strict_types=1);

namespace App\Providers;

use App\Interfaces\Services\ShopifyServiceInterface;
use App\Services\ShopifyService;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ShopifyServiceInterface::class => ShopifyService::class,
    ];

    public function register(): void {}

    public function boot(): void {}
}
