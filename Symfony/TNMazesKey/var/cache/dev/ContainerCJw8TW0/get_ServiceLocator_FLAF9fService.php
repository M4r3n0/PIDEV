<?php

namespace ContainerCJw8TW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FLAF9fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FLA_F9f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FLA_F9f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'avi' => ['privates', '.errored..service_locator.FLA_F9f.App\\Entity\\Avis', NULL, 'Cannot autowire service ".service_locator.FLA_F9f": it references class "App\\Entity\\Avis" but no such service exists.'],
        ], [
            'avi' => 'App\\Entity\\Avis',
        ]);
    }
}