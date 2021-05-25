<?php

namespace ContainerW6FXsz6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MPL6cZzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mPL6cZz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mPL6cZz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.mPL6cZz.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.mPL6cZz": it references class "App\\Entity\\Article" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repophotos' => ['privates', 'App\\Repository\\PhotosRepository', 'getPhotosRepositoryService', true],
        ], [
            'article' => 'App\\Entity\\Article',
            'manager' => '?',
            'paginator' => '?',
            'repophotos' => 'App\\Repository\\PhotosRepository',
        ]);
    }
}