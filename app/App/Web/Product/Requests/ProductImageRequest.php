<?php

namespace App\Web\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest{

    public function rules(): array{
        return ['product_id' => ['required', 'unsignedInteger']];
        return ['image_path' => ['required', 'string']];
    }
}