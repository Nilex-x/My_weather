<?php

namespace ContainerQUgGw5W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGoodLocationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GoodLocationController' shared autowired service.
     *
     * @return \App\Controller\GoodLocationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GoodLocationController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/WeatherService.php';

        $container->services['App\\Controller\\GoodLocationController'] = $instance = new \App\Controller\GoodLocationController(($container->privates['App\\Service\\WeatherService'] ?? ($container->privates['App\\Service\\WeatherService'] = new \App\Service\WeatherService($container->getEnv('APIKEY')))));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\GoodLocationController', $container));

        return $instance;
    }
}