<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\Services\ShopifyServiceInterface;
use GuzzleHttp\Client;

final class ShopifyService implements ShopifyServiceInterface
{
    public function __construct(protected Client $client)
    {
        $accessToken = config('shopify-app.access_token');

        $this->client = new Client([
            'base_uri' => "https://irinasstoretest.myshopify.com/admin/api/2025-01/",
            'headers' => [
                'Content-Type' => 'application/json',
                'X-Shopify-Access-Token' => $accessToken,
            ],
        ]);
    }

    public function getProducts(): mixed
    {
        $response = $this->client->get('products.json');

        return json_decode($response->getBody()->getContents(), true);
    }
}
