<?php

namespace Domain\Product\Actions;

use Domain\Product\Dtos\ProductData;
use Domain\Product\Models\Product;

final class CreateProductAction {
    public function __invoke(ProductData $productData): Product{
        return Product::create([
            'name' => $productData->name,
            'price' => $productData->price,
            'qty' => $productData->qty,
            'category_id' => $productData->category_id,

        ]);
    }
}