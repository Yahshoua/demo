<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSenderEmailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\SenderEmails' shared autowired service.
     *
     * @return \App\Services\SenderEmails
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/SenderEmails.php';

        return $container->privates['App\\Services\\SenderEmails'] = new \App\Services\SenderEmails(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));
    }
}