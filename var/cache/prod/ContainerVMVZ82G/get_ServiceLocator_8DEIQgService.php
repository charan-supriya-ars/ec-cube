<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8DEIQgService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator._8DEIQg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._8DEIQg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'TargetPayment' => ['privates', '.errored..service_locator._8DEIQg.Eccube\\Entity\\Payment', NULL, 'Cannot autowire service ".service_locator._8DEIQg": it references class "Eccube\\Entity\\Payment" but no such service exists.'],
        ], [
            'TargetPayment' => 'Eccube\\Entity\\Payment',
        ]);
    }
}
