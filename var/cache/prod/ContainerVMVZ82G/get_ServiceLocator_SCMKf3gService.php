<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SCMKf3gService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.SCMKf3g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SCMKf3g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Shipping' => ['privates', '.errored..service_locator.SCMKf3g.Eccube\\Entity\\Shipping', NULL, 'Cannot autowire service ".service_locator.SCMKf3g": it references class "Eccube\\Entity\\Shipping" but no such service exists.'],
        ], [
            'Shipping' => 'Eccube\\Entity\\Shipping',
        ]);
    }
}
