<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EGrfIOZService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eGrfIOZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eGrfIOZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Product' => ['privates', '.errored..service_locator.eGrfIOZ.Eccube\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.eGrfIOZ": it references class "Eccube\\Entity\\Product" but no such service exists.'],
        ], [
            'Product' => 'Eccube\\Entity\\Product',
        ]);
    }
}
