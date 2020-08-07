<?php
namespace Frame\Database;


interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}
