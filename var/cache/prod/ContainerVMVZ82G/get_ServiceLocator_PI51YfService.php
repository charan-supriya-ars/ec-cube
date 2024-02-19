<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PI51YfService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.PI51_Yf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PI51_Yf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Customer' => ['privates', '.errored..service_locator.PI51_Yf.Eccube\\Entity\\Customer', NULL, 'Cannot autowire service ".service_locator.PI51_Yf": it references class "Eccube\\Entity\\Customer" but no such service exists.'],
        ], [
            'Customer' => 'Eccube\\Entity\\Customer',
        ]);
    }
}
