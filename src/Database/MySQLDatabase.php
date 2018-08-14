<?php

namespace Solid\Database;


class MySQLDatabase implements DatabaseInterface
{

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
}