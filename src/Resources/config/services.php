<?php

use Fd\FractalBundle\ContainerAwareManager;
use League\Fractal\Manager;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set(ContainerAwareManager::class, ContainerAwareManager::class)
            ->public()
            ->call('setContainer', [service('service_container')])
        ->alias('fd_fractal.manager', ContainerAwareManager::class)
            ->public()
        ->alias(Manager::class, ContainerAwareManager::class)
            ->public()
    ;
};