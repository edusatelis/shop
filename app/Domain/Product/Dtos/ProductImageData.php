<?php

namespace Domain\Product\Dtos;

use Spatie\DataTransferObject\DataTransferObject;

class ProductImageData extends DataTransferObject {
    
    /** @var unsignedInterger */
    public  $product_id;

    /** @var decimal */
    public $image_path;
    

    public static function fromRequest(ProductImageRequest $productImageRequest): ProductImageData{
        return new Self([
            'product_id' => $productImageRequest['product_id'],
            'image_path' => $productImageRequest['image_path']
        ]);
    }
}