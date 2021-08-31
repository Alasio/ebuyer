<?php

namespace ContainerXEZAbqT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C4ZdSueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c4ZdSue' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c4ZdSue'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ajaxController' => ['services', 'App\\Controller\\AjaxController', 'getAjaxControllerService', true],
        ], [
            'ajaxController' => 'App\\Controller\\AjaxController',
        ]);
    }
}