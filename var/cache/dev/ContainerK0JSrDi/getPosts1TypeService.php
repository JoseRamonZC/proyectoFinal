<?php

namespace ContainerK0JSrDi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosts1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Posts1Type' shared autowired service.
     *
     * @return \App\Form\Posts1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Posts1Type.php';

        return $container->privates['App\\Form\\Posts1Type'] = new \App\Form\Posts1Type();
    }
}
