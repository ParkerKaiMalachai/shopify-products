<?php

declare(strict_types=1);

namespace App\Providers;

use App\Interfaces\Services\ShopifyServiceInterface;
use App\Services\ShopifyService;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ShopifyServiceInterface::class,
            fn() =>
            new ShopifyService(config('shopify-app.base_uri'), config('shopify-app.access_token'))
        );
    }

    public function boot(): void {}
}
