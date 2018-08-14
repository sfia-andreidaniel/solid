<?php

namespace Solid;


class Database
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
                'id'     => 2,
                'amount' => 2.3,
                'driver' => 'MySQL'
            ]
        ];
    }

    /**
     * @param string $sql
     *
     * @return array
     */
    public function queryAndAlertBoss($sql)
    {

        return [
            [
                'id'     => 2,
                'amount' => 2.3,
                'driver' => 'MySQL'
            ]
        ];
    }

    public static function getInstance()
    {

        return self::$instance !== null ? self::$instance : self::$instance = new self();
    }

}