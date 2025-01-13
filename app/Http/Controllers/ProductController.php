<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Config\ExportTypes;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final readonly class ProductController extends Controller
{
    public function __construct(private ProductExport $productExport) {}

    public function export($type): BinaryFileResponse
    {
        $types = ExportTypes::all();

        return Excel::download($this->productExport, "products.$type", $types[$type]);
    }
}
