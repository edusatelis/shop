<?php

namespace Domain\Product\Actions;

use Domain\Product\Dtos\ProductDescriptionData;
use Domain\Product\Models\ProductDescription;

final class CreateProductDescriptionAction {
    public function __invoke(ProductDescriptionData $productDescriptionData): ProductDescription{
        return Product::create([
            'product_id' => $productDescriptionData->product_id,
            'description' => $productDescriptionData->description
        ]);
    }
}