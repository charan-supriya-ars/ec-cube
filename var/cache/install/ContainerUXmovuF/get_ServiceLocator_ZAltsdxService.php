<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZAltsdxService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.ZAltsdx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZAltsdx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Plugin' => ['privates', '.errored..service_locator.ZAltsdx.Eccube\\Entity\\Plugin', NULL, 'Cannot autowire service ".service_locator.ZAltsdx": it references class "Eccube\\Entity\\Plugin" but no such service exists.'],
        ], [
            'Plugin' => 'Eccube\\Entity\\Plugin',
        ]);
    }
}
