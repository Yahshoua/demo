<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BVmQWqSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BVmQWqS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BVmQWqS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', true],
        ], [
            'em' => '?',
            'encoder' => '?',
            'tokenGenerator' => '?',
        ]);
    }
}
