<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerAddressType2Service extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Shopping\CustomerAddressType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Shopping\CustomerAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Shopping'.\DIRECTORY_SEPARATOR.'CustomerAddressType.php';

        return $container->privates['Eccube\\Form\\Type\\Shopping\\CustomerAddressType'] = new \Eccube\Form\Type\Shopping\CustomerAddressType();
    }
}
