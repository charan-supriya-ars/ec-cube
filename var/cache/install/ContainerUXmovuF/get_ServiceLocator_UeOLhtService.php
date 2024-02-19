<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UeOLhtService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.UeOLht_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UeOLht_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'systemService' => ['services', 'Eccube\\Service\\SystemService', 'getSystemServiceService', true],
        ], [
            'systemService' => 'Eccube\\Service\\SystemService',
        ]);
    }
}
