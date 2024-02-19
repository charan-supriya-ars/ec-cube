<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailMagazineTemplateRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository' shared autowired service.
     *
     * @return \Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'MailMagazine42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'MailMagazineTemplateRepository.php';

        return $container->privates['Plugin\\MailMagazine42\\Repository\\MailMagazineTemplateRepository'] = new \Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
