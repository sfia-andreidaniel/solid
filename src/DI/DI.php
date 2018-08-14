<?php

namespace Solid\DI;


use DI\Container;
use DI\ContainerBuilder;

class DI
{

    /**
     * @var self
     */
    private static $instance;

    /**
     * @var Container
     */
    private static $container;

    private function __construct()
    {
    }

    /**
     * @param string $classType
     *
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public static function get($classType)
    {

        return self::createContainer()
                   ->get($classType);
    }

    /**
     * @return Container
     */
    private static function createContainer()
    {

        if (null === self::$container) {

            $builder = new ContainerBuilder();

            $builder->addDefinitions(
                require __DIR__ . '/../../config/di.php'
            );

            self::$container = $builder->build();

        }

        return self::$container;

    }

    public static function getInstance()
    {
        return self::$instance !== null
            ? self::$instance
            : new self();
    }

}