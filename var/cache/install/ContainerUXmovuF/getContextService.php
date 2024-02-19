<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContextService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Request\Context' shared autowired service.
     *
     * @return \Eccube\Request\Context
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'Context.php';

        return $container->privates['Eccube\\Request\\Context'] = new \Eccube\Request\Context(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
