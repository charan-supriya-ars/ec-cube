<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductReviewRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\ProductReview42\Repository\ProductReviewRepository' shared autowired service.
     *
     * @return \Plugin\ProductReview42\Repository\ProductReviewRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'ProductReview42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductReviewRepository.php';

        return $container->privates['Plugin\\ProductReview42\\Repository\\ProductReviewRepository'] = new \Plugin\ProductReview42\Repository\ProductReviewRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}