<?php

namespace Passionweb\CustomEvent\EventListener;


use Passionweb\CustomEvent\Events\EnrichProductDataEvent;

class EnrichProductDataEventListener
{
    public function enrichProductdata(EnrichProductDataEvent $event): void
    {
        $productData = $event->getProductData();
        $productData['image'] = 'EXT:custom_event/Resources/Public/Images/example.jpg';
        $event->setProductData($productData);
    }
}
