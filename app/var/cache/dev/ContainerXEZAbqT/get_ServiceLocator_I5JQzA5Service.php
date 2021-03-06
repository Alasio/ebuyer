<?php

namespace ContainerXEZAbqT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I5JQzA5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I5JQzA5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I5JQzA5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AjaxController::handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\AjaxController::throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\AjaxController::validateForm' => ['privates', '.service_locator.U7VViCc', 'get_ServiceLocator_U7VViCcService', true],
            'App\\Controller\\DashboardController::handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\DashboardController::throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\PickingRouteController::handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\PickingRouteController::throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\ProductController::handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\ProductController::throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController::handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController::showProductInBin' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController::throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AjaxController:handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\AjaxController:throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\AjaxController:validateForm' => ['privates', '.service_locator.U7VViCc', 'get_ServiceLocator_U7VViCcService', true],
            'App\\Controller\\DashboardController:handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\DashboardController:throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\PickingRouteController:handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\PickingRouteController:throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\ProductController:handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\ProductController:throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController:handleTypeError' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController:showProductInBin' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'App\\Controller\\WarehouseController:throwMessage' => ['privates', '.service_locator.c4ZdSue', 'get_ServiceLocator_C4ZdSueService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AjaxController::handleTypeError' => '?',
            'App\\Controller\\AjaxController::throwMessage' => '?',
            'App\\Controller\\AjaxController::validateForm' => '?',
            'App\\Controller\\DashboardController::handleTypeError' => '?',
            'App\\Controller\\DashboardController::throwMessage' => '?',
            'App\\Controller\\PickingRouteController::handleTypeError' => '?',
            'App\\Controller\\PickingRouteController::throwMessage' => '?',
            'App\\Controller\\ProductController::handleTypeError' => '?',
            'App\\Controller\\ProductController::throwMessage' => '?',
            'App\\Controller\\WarehouseController::handleTypeError' => '?',
            'App\\Controller\\WarehouseController::showProductInBin' => '?',
            'App\\Controller\\WarehouseController::throwMessage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AjaxController:handleTypeError' => '?',
            'App\\Controller\\AjaxController:throwMessage' => '?',
            'App\\Controller\\AjaxController:validateForm' => '?',
            'App\\Controller\\DashboardController:handleTypeError' => '?',
            'App\\Controller\\DashboardController:throwMessage' => '?',
            'App\\Controller\\PickingRouteController:handleTypeError' => '?',
            'App\\Controller\\PickingRouteController:throwMessage' => '?',
            'App\\Controller\\ProductController:handleTypeError' => '?',
            'App\\Controller\\ProductController:throwMessage' => '?',
            'App\\Controller\\WarehouseController:handleTypeError' => '?',
            'App\\Controller\\WarehouseController:showProductInBin' => '?',
            'App\\Controller\\WarehouseController:throwMessage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
