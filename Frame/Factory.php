<?php

namespace Frame;

class Factory
{

    // 工厂模式

    static function createDatabase()
    {
        $db = Database::getInstance();

        Register::set("db1",$db);
        return $db;
    }


}
