<?php

namespace Domain\Category\Dtos;

use App\Web\Category\Requests\CategoryRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CategoryData extends DataTransferObject {
    
    /** @var string */
    public  $name;

    public static function fromRequest(CategoryRequest $categoryRequest): CategoryData{
        return new Self([
            'name' => $categoryRequest['name'],
        ]);
    }
}