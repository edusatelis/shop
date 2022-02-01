<?php

namespace App\Web\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest{

    public function rules(): array{
        return ['name' => ['required', 'string']];
        return ['price' => ['required', 'decimal']];
        return ['qty' => ['required', 'int']];
        return ['category_id' => ['required', 'unsignedInteger']];
    }
}