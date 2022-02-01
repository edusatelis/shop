<?php

namespace App\Web\Category\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest{

    public function rules(): array{
        return ['name' => ['required', 'string']];
    }
}