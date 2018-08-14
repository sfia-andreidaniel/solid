<?php

namespace Solid;


class DatabaseMSSql
{

    private static $instance;

    private function __construct()
    {
    }

    /**
     * @param string $sql
     *
     * @return array
     */
    public function query($sql)
    {

        return [
            [
                'id'     => 33,
                'amount' => 2.3,
                'driver' => 'MSSql'
            ]
        ];
    }

    public static function getInstance()
    {

        return self::$instance !== null ? self::$instance : self::$instance = new self();
    }

}