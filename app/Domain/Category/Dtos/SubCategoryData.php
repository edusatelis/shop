<?php

namespace Domain\Category\Dtos;

use Spatie\DataTransferObject\DataTransferObject;

class SubCategoryData extends DataTransferObject {
    
     /** @var unsignedInteger */
    public  $category_id;
    /** @var string */
    public  $name;

    public static function fromRequest(SubCategoryRequest $subCategoryRequest): SubCategoryData{
        return new Self([
            'category_id' => $subCategoryRequest['category_id'],
            'name' => $subCategoryRequest['name']
        ]);
    }
}