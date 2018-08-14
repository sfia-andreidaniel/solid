<?php

namespace Solid\Database;


class MSSqlDatabase implements DatabaseInterface
{

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
}