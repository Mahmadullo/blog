<?php

spl_autoload_register('MyAutoload');

function MyAutoload($classname) {
    $path = __DIR__ . 'classes';
    $extenction = ".php";
    $fullPath = $path . $classname . $extenction;
    include_once $fullPath;
}