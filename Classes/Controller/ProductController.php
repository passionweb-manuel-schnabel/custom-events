<?php

namespace Passionweb\CustomEvent\Controller;

use Passionweb\CustomEvent\Events\EnrichProductDataEvent;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductController extends ActionController
{
    private array $rawProductData = [
        'id' => '1234',
        'title' => 'I am the title',
        'description' => 'I am the description',
        'price' => 12.34
    ];
    public function eventAction(): ResponseInterface {

        $extendedProductData = $this->eventDispatcher->dispatch(
            new EnrichProductDataEvent($this->rawProductData)
        )->getProductData();

        $this->view->assign('productData', $extendedProductData);
        return $this->htmlResponse();
    }
}
