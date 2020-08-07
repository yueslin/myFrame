<?php
namespace Frame;

class Database
{
    // 单例模式 连接数据库

    static private $db = null;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if (!self::$db){
            self::$db = new self();
        }
        return self::$db;

    }

}
