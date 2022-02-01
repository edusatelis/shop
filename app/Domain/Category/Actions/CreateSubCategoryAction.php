<?php

namespace Domain\Category\Actions;

use Domain\Category\Dtos\SubCategoryData;

use Domain\Category\Models\SubCategory;

final class CreateSubCategoryAction {
    public function __invoke(SubCategoryData $subCategoryData): SubCategory{
        return Category::create([
            'category_id' => $subCategoryData->category_id,
            'name' => $subCategoryData->name
        ]);
    }
}