<?php

use Solid\Database\DatabaseInterface;

//define('CLIENT_ID', 2);

return [

    DatabaseInterface::class => function( \Psr\Container\ContainerInterface $c ) {
        if ( defined('CLIENT_ID')) {
            return new \Solid\Database\MSSqlDatabase();
        } else {
            return new \Solid\Database\MySQLDatabase();
        }
    }

];