<?php

namespace ContainerXC8maXd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AHMYB6NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aHMYB6N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aHMYB6N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BlogController::delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\BlogController::form' => ['privates', '.service_locator.VmyKyRl', 'get_ServiceLocator_VmyKyRlService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\BlogController::show' => ['privates', '.service_locator.mPL6cZz', 'get_ServiceLocator_MPL6cZzService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BlogController:delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\BlogController:form' => ['privates', '.service_locator.VmyKyRl', 'get_ServiceLocator_VmyKyRlService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\BlogController:show' => ['privates', '.service_locator.mPL6cZz', 'get_ServiceLocator_MPL6cZzService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BlogController::delete' => '?',
            'App\\Controller\\BlogController::form' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::show' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BlogController:delete' => '?',
            'App\\Controller\\BlogController:form' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:show' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
