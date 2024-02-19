<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultMetadataCacheWarmerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'doctrine.orm.default_metadata_cache_warmer' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\CacheWarmer\DoctrineMetadataCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'DoctrineMetadataCacheWarmer.php';

        return $container->privates['doctrine.orm.default_metadata_cache_warmer'] = new \Doctrine\Bundle\DoctrineBundle\CacheWarmer\DoctrineMetadataCacheWarmer(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->targetDir.''.'/doctrine/orm/default_metadata.php'));
    }
}