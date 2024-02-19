<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_Doctrine_AuthorizationCodeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'league.oauth2_server.manager.doctrine.authorization_code' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\AuthorizationCodeManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'AuthorizationCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'AuthorizationCodeManager.php';

        return $container->privates['league.oauth2_server.manager.doctrine.authorization_code'] = new \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\AuthorizationCodeManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
