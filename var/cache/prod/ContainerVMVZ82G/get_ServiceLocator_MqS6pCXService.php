<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MqS6pCXService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.MqS6pCX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MqS6pCX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orderPdfService' => ['privates', 'Eccube\\Service\\OrderPdfService', 'getOrderPdfServiceService', true],
        ], [
            'orderPdfService' => 'Eccube\\Service\\OrderPdfService',
        ]);
    }
}