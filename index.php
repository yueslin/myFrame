<?php

define('BASEDIR',__DIR__);


include BASEDIR.'/Frame/Loader.php';
spl_autoload_register('\\Frame\\Loader::autoload');

$db = \Frame\Register::get("db1");

$db = new MySQLi();
$db->connect("49.234.97.186",'yueslin','nCYERCrWSkMSfnKR','yueslin');
$res = $db->query("show databases");
$db->close();

var_dump($res);
