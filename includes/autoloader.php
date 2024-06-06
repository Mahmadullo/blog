<?php

spl_autoload_register('MyAutoload');

function MyAutoload($classname)
{
    $path = "classes/";
    $extenction = ".php";
    $fullPath = $path . $classname . $extenction;

    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}