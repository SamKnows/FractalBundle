<?php

namespace Fd\FractalBundle;

use Fd\FractalBundle\DependencyInjection\Compiler\TransformerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FdFractalBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        
        $container->addCompilerPass(new TransformerPass);
    }
}
