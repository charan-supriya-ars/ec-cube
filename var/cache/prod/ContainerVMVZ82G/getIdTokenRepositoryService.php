<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIdTokenRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\SiteKit42\Repository\IdTokenRepository' shared autowired service.
     *
     * @return \Plugin\SiteKit42\Repository\IdTokenRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'SiteKit42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'IdTokenRepository.php';

        return $container->privates['Plugin\\SiteKit42\\Repository\\IdTokenRepository'] = new \Plugin\SiteKit42\Repository\IdTokenRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
