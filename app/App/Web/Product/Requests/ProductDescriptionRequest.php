<?php

namespace App\Web\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDescriptionRequest extends FormRequest{

    public function rules(): array{
        return ['product_id' => ['required', 'unsignedInteger']];
        return ['description' => ['required', 'text']];
    }
}