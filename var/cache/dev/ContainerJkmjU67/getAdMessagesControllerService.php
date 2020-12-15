<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdMessagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdMessagesController' shared autowired service.
     *
     * @return \App\Controller\AdMessagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdMessagesController.php';

        $container->services['App\\Controller\\AdMessagesController'] = $instance = new \App\Controller\AdMessagesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AdMessagesController', $container));

        return $instance;
    }
}