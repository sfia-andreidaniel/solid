<?php

    namespace Solid;

    class Notifications {

        public function __construct()
        {
            Database::getInstance()->query($sql, $alertBoss = true);

        }

    }