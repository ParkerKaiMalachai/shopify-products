<?php

declare(strict_types=1);

namespace App\Exports;

use App\Interfaces\Services\ShopifyServiceInterface;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

final class ProductExport implements FromCollection, WithHeadings
{

    public function __construct(private ShopifyServiceInterface $shopify) {}

    public function collection(): Collection
    {
        return collect($this->shopify->getProducts());
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'body_html'
        ];
    }
}
