<?php

namespace ContainerCJw8TW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VZwM3sLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VZwM3sL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VZwM3sL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'restaurant' => ['privates', '.errored..service_locator.VZwM3sL.App\\Entity\\Restaurant', NULL, 'Cannot autowire service ".service_locator.VZwM3sL": it references class "App\\Entity\\Restaurant" but no such service exists.'],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'entityManager' => '?',
            'restaurant' => 'App\\Entity\\Restaurant',
            'validator' => '?',
        ]);
    }
}
