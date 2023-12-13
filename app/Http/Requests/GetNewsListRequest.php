<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetNewsListRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page' => ['sometimes', 'int'],
            'per_page' => ['sometimes', 'int'],
            'date' => ['sometimes', 'date']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
