<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBibliothequeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BibliothequeController' shared autowired service.
     *
     * @return \App\Controller\BibliothequeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BibliothequeController.php';

        $container->services['App\\Controller\\BibliothequeController'] = $instance = new \App\Controller\BibliothequeController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\BibliothequeController', $container));

        return $instance;
    }
}