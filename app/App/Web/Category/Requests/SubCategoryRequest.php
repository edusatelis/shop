<?php

namespace App\Web\Category\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest{

    public function rules(): array{
        return ['name' => ['required', 'string']];
        return ['category_id' => ['required', 'unsignedInteger']];

    }
}