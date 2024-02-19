<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebHookRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\Api42\Repository\WebHookRepository' shared autowired service.
     *
     * @return \Plugin\Api42\Repository\WebHookRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'WebHookRepository.php';

        return $container->privates['Plugin\\Api42\\Repository\\WebHookRepository'] = new \Plugin\Api42\Repository\WebHookRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
