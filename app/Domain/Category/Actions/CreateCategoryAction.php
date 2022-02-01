<?php

namespace Domain\Category\Actions;

use Domain\Category\Dtos\CategoryData;

use Domain\Category\Models\Category;

final class CreateCategoryAction {
    public function __invoke(CategoryData $categoryData): Category{
        return Category::create([
            'name' => $categoryData->name
        ]);
    }
}