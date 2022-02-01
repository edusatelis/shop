<?php

namespace Domain\Product\Dtos;

use Spatie\DataTransferObject\DataTransferObject;

class ProductData extends DataTransferObject {
    
    /** @var string */
    public  $name;

    /** @var decimal */
    public $price;
    
    /** @var int */
    public $qty;
    
    /** @var unsignedInterger */
    public $category_id;

    public static function fromRequest(ProductRequest $productRequest): ProductData{
        return new Self([
            'name' => $productRequest['name'],
            'price' => $productRequest['price'],
            'qty' => $productRequest['qty'],
            'category_id' => $productRequest['category_id']
        ]);
    }
}