<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateDummyDataCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\GenerateDummyDataCommand' shared autowired service.
     *
     * @return \Eccube\Command\GenerateDummyDataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GenerateDummyDataCommand.php';

        $container->privates['Eccube\\Command\\GenerateDummyDataCommand'] = $instance = new \Eccube\Command\GenerateDummyDataCommand(NULL, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()));

        $instance->setName('eccube:fixtures:generate');

        return $instance;
    }
}
