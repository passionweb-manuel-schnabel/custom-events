<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Passionweb\CustomEvent\Events\EnrichProductDataEvent;
use Passionweb\CustomEvent\EventListener\EnrichProductDataEventListener;

return static function (ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void {
    $services = $containerConfigurator->services();
    $services->defaults()
        ->private()
        ->autowire()
        ->autoconfigure();

    $services->load('Passionweb\\CustomEvent\\', __DIR__ . '/../Classes/')
        ->exclude([
            __DIR__ . '/../Classes/Domain/Model',
        ]);

    $services->set('EnrichProductDataEventListener', EnrichProductDataEventListener::class)
        ->tag('event.listener', [
            'method' => 'enrichProductData',
            'event' => EnrichProductDataEvent::class,
        ]);
};
