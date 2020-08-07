<?php

define('BASEDIR',__DIR__);


var_dump(BASEDIR);
include BASEDIR.'/Frame/Loader.php';
spl_autoload_register('\\Frame\\Loader::autoload');


$db = \Frame\Register::get("db1");
