<?php

namespace Fd\FractalBundle\DependencyInjection;

use Fd\FractalBundle\DependencyInjection\Compiler\TransformerPass;
use League\Fractal\TransformerAbstract;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class FdFractalExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\PhpFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.php');

        $container->registerForAutoconfiguration(TransformerAbstract::class)
            ->addTag(TransformerPass::TRANSFORMER_TAG)
        ;
    }
}
