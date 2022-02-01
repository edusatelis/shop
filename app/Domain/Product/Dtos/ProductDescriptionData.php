<?php

namespace Domain\Product\Dtos;

use Spatie\DataTransferObject\DataTransferObject;

class ProductDescriptionData extends DataTransferObject {
    
    /** @var unsignedInterger */
    public  $product_id;

    /** @var decimal */
    public $description;
    

    public static function fromRequest(ProductDescriptionRequest $productDescriptionRequest): ProductDescriptionData{
        return new Self([
            'product_id' => $productDescriptionRequest['product_id'],
            'description' => $productDescriptionRequest['description']
        ]);
    }
}