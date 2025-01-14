<?php

declare(strict_types=1);

namespace App\Config;

use \Maatwebsite\Excel\Excel;

enum ExportTypes: string
{
    case CSV = 'csv';
    case PDF = 'pdf';
    case TXT = 'txt';

    public function get(): string
    {
        return match ($this) {
            self::CSV => Excel::CSV,
            self::PDF => Excel::TCPDF,
            self::TXT => Excel::CSV,
        };
    }
}
