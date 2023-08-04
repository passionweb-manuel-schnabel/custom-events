<?php

namespace Passionweb\CustomEvent\Events;

final class EnrichProductDataEvent {
    private array $productData;

    public function __construct(array $productData) {
        $this->productData = $productData;
    }

    public function getProductData(): array
    {
        return $this->productData;
    }

    public function setProductData(array $productData): void
    {
        $this->productData = $productData;
    }
}
