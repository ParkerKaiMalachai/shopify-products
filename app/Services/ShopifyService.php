<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\ShopifyException;
use App\Interfaces\Services\ShopifyServiceInterface;
use GuzzleHttp\Client;
use Throwable;

final class ShopifyService implements ShopifyServiceInterface
{
    private Client $client;

    public function __construct(string $baseUri, string $accessToken)
    {
        $this->client = new Client([
            'base_uri' => $baseUri,
            'headers' => [
                'Content-Type' => 'application/json',
                'X-Shopify-Access-Token' => $accessToken,
            ],
        ]);
    }

    public function getProducts(): mixed
    {
        try {
            $response = $this->client->get('products.json');
        } catch (Throwable $e) {
            throw new ShopifyException($e->getMessage());
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
