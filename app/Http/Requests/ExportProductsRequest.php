<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Config\ExportTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

final class ExportProductsRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'type' => ['required', new Enum(ExportTypes::class)],
        ];
    }
}
