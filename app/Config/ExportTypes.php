<?php

declare(strict_types=1);

namespace App\Config;

use \Maatwebsite\Excel\Excel;

final readonly class ExportTypes
{
    public static function all(): array
    {
        return [
            'csv' => Excel::CSV,
            'pdf' => Excel::TCPDF,
            'txt' => Excel::CSV,
        ];
    }
}
