<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryFeeRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\DeliveryFeeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\DeliveryFeeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'DeliveryFeeRepository.php';

        return $container->privates['Eccube\\Repository\\DeliveryFeeRepository'] = new \Eccube\Repository\DeliveryFeeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
