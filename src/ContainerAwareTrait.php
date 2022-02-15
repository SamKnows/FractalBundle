<?php

namespace Fd\FractalBundle;

use Psr\Container\ContainerInterface;

/**
 * ContainerAware trait.
 */
trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
