<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderItemTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\OrderItemType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\OrderItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'OrderItemType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\OrderItemType'] = new \Eccube\Form\Type\Admin\OrderItemType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? $container->getProductClassRepositoryService()), ($container->privates['Eccube\\Repository\\OrderItemRepository'] ?? $container->load('getOrderItemRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));
    }
}
