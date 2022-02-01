<?php

namespace Domain\Product\Actions;

use Domain\Product\Dtos\ProductImageData;
use Domain\Product\Models\ProductImage;

final class CreateProductImageAction {
    public function __invoke(ProductImageData $productImageData): ProductImage{
        return Product::create([
            'product_id' => $productImageData->product_id,
            'image_path' => $productImageData->image_path
        ]);
    }
}