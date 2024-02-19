<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInitSubscriberService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Doctrine\EventSubscriber\InitSubscriber' shared autowired service.
     *
     * @return \Eccube\Doctrine\EventSubscriber\InitSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'InitSubscriber.php';

        return $container->privates['Eccube\\Doctrine\\EventSubscriber\\InitSubscriber'] = new \Eccube\Doctrine\EventSubscriber\InitSubscriber();
    }
}
