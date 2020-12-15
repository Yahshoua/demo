<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdSearchControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdSearchController' shared autowired service.
     *
     * @return \App\Controller\AdSearchController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdSearchController.php';

        $container->services['App\\Controller\\AdSearchController'] = $instance = new \App\Controller\AdSearchController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AdSearchController', $container));

        return $instance;
    }
}