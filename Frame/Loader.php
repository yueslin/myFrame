<?php

namespace Frame;

class Loader
{
    static function autoload($class)
    {

        $path = BASEDIR."/".$class.".php";
//        $path = BASEDIR."/".str_replace('\\','/',$class).".php";

        var_dump($path);

        require $path;
    }

}
